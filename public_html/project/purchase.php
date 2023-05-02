<?php
require(__DIR__ . "/../../partials/nav.php");

is_logged_in(true);

$TABLE_NAME = "Orders";
$db = getDB();

if (isset($_POST["submit"])) {
        $payment_method = $_POST["payment_method"];
        if (empty($payment_method)) {
            flash("Please select a payment method", "danger");
        }

        $cartTotal = 0;
        $stmt = $db->prepare("SELECT cart.product_id, item.stock, item.name, cart.desired_quantity, cart.unit_price FROM Products AS item JOIN Product_Cart AS cart ON item.id = cart.product_id WHERE cart.user_id = :uid");
        $stmt->execute([":uid" => get_user_id()]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($results) {
            foreach ($results as $result) {
                $cartTotal += ($result["desired_quantity"] * $result["unit_price"]);
            }
            $payment_amount = $_POST["payment_amount"];
            if ($payment_amount < $cartTotal) {
                flash("invalid Money Received", "danger");
            }
        }

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $street_address = $_POST["street_address"];
        $apartment = $_POST["apartment"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $country = $_POST["country"];

        if (empty($street_address) || empty($city) || empty($state) || empty($zip) || empty($country)) {
            flash("Please fill in all address fields", "danger");
        }

        $address = $street_address . ", " . $apartment . ", " . $city . ", " . $state . ", " . $zip . ", " . $country;
        $stmt = $db->prepare("SELECT cart.product_id, item.stock, item.name FROM Products AS item JOIN Product_Cart AS cart ON item.id = cart.product_id WHERE cart.user_id = :uid AND cart.desired_quantity > item.stock");
        $stmt->execute([":uid" => get_user_id()]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($results) {
            foreach ($results as $result) {
                $product_id = $result["product_id"];
                $stock = $result["stock"];
                $item_name = $result["name"];
                flash("Only $stock of product $item_name is available", "danger");
            }
            header("Location: $BASE_PATH/cart_alt.php");
            die;
        } 
else {
        $payment_method = $_POST["payment_method"];
        $payment_amount = $_POST["payment_amount"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $street_address = $_POST["street_address"];
        $apartment = $_POST["apartment"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $country = $_POST["country"];
        $address = $street_address . ", " . $apartment . ", " . $city . ", " . $state . ", " . $zip . ", " . $country;
        if (!empty($payment_method) && !empty($street_address) && !empty($city) && !empty($state) && !empty($zip) && !empty($country) && $payment_amount >= $cartTotal) {
            $stmt = $db->prepare("INSERT INTO Orders (user_id, payment_method, money_received, first_name, last_name, address) VALUES (:user_id, :payment_method, :money_received, :first_name, :last_name, :address)");
            $stmt->execute([
                ":user_id" => get_user_id(),
                ":payment_method" => $payment_method,
                ":money_received" => $payment_amount,
                ":first_name" => $first_name,
                ":last_name" => $last_name,
                ":address" => $address,
            ]);
        }

        $id = $db->lastInsertId();
        if ($id > 0) {
            if ($id > 0) {
                $stmt = $db->prepare("SELECT * FROM Product_Cart WHERE user_id = :uid");
                $stmt->execute([":uid" => get_user_id()]);
                $cartItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                foreach ($cartItems as $item) {
                    $stmt = $db->prepare("INSERT INTO OrderItems (order_id, product_id, quantity, unit_price) VALUES (:order_id, :product_id, :quantity, :unit_price)");
                    $stmt->execute([
                        ":order_id" => $id,
                        ":product_id" => $item["product_id"],
                        ":quantity" => $item["desired_quantity"],
                        ":unit_price" => $item["unit_price"]
                    ]);
                }
                
                foreach ($cartItems as $item) {
                    $stmt = $db->prepare("UPDATE Products SET stock = stock - :quantity WHERE id = :product_id");
                    $stmt->execute([
                        ":quantity" => $item["desired_quantity"],
                        ":product_id" => $item["product_id"]
                    ]);
                }
                
                $stmt = $db->prepare("DELETE FROM Product_Cart WHERE user_id = :uid");
                $stmt->execute([":uid" => get_user_id()]);
                
                header("Location: $BASE_PATH/order_confirmation.php?id=$id");
                die();
            }
            
        }
    }
}


$query = "SELECT cart.id, cart.product_id, item.stock, item.name, cart.unit_price, (cart.unit_price * cart.desired_quantity) as subtotal, cart.desired_quantity
FROM Products as item JOIN Product_Cart as cart on item.id = cart.product_id
 WHERE cart.user_id = :uid";
$db = getDB();
$stmt = $db->prepare($query);
$cart = [];
try {
    $stmt->execute([":uid" => get_user_id()]);
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($results) {
        $cart = $results;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching cart", "danger");
}
?>

<div class="container-fluid">
    <h1>Checkout</h1>
    <table class="table table-striped">
        <?php $total = 0; $Itemtotal = 0; ?>
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cart as $c) : ?>
                <?php
                $query = "SELECT unit_price, stock FROM Products WHERE id = :product_id";
                $stmt = $db->prepare($query);
                $stmt->execute([":product_id" => $c["product_id"]]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $product_unit_price = $result["unit_price"];
                $product_stock = $result["stock"];
                $cart_unit_price = $c["unit_price"];
                $price_change = round((($product_unit_price - $cart_unit_price) / ($cart_unit_price)) * 100);
                $subtotalVal = $c["desired_quantity"] * $product_unit_price;

                ?>
                <tr>
                    <td> <?php se($c, "name"); ?></td>
                    <td><?php se($result, "unit_price"); ?></td>
                    <td><?php se($c, "desired_quantity"); ?></td>
                    <?php 
                        $total += (int)se($subtotalVal, "subtotal", 0, false);
                        $string = $c["name"];
                        $count = strlen($string) / strlen($string); 
                        $count = (int) $count; 
                        $Itemtotal += (int)se($count, "item", 0, false);
                     ?>
                    <td>
                        <?php se($subtotalVal, "subtotal"); ?>
                        <?php if ($cart_unit_price != $product_unit_price) : ?>
                            <br>
                            <small>
                                <?php
                                     echo '(' . $price_change . '%)'; 
                                     flash("price has changed", "danger");
                                ?>
                            </small>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php if (count($cart) == 0) : ?>
                <tr>
                    <td colspan="100%">No items in cart</td>
                </tr>
            <?php endif; ?>
            <tr>
                <td colspan="100%">Item Total: <?php se($Itemtotal, null, 0); ?></td>
            </tr>
            <tr>
                <td colspan="100%">Total: <?php se($total, null, 0); ?></td>
            </tr>
            <tr>
                <td colspan="100%"><a href="<?php echo $BASE_PATH; ?>/cart_alt.php?id=<?php se($c, "product_id"); ?>">Back to Cart </a></td>
            </tr>
        </tbody>

    </table>
    <h2>Checkout Form</h2>
    <form method="POST">
        <label for="payment_method">Payment Method</label><br>
        <input class="form-control" type="text" id="payment_method" name="payment_method" ><br>

        <label for="payment_amount">Payment Amount</label><br>
        <input class="form-control" type="number" id="payment_amount" name="payment_amount" ><br>

        <label for="first_name">First Name</label><br>
        <input class="form-control" type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Last Name</label><br>
        <input class="form-control" type="text" id="last_name" name="last_name" required><br>

        <label for="street_address">Address</label><br>
        <input class="form-control" type="text" id="street_address" name="street_address" ><br>

        <label for="apartment">Apartment, Suite, etc</label><br>
        <input class="form-control" type="text" id="apartment" name="apartment"><br>

        <label for="city">City</label><br>
        <input class="form-control" type="text" id="city" name="city" ><br>

        <label for="state">State/Province</label><br>
        <input class="form-control" type="text" id="state" name="state" ><br>

        <label for="country">Country</label><br>
        <input class="form-control" type="text" id="country" name="country" ><br>

        <label for="zip">Zip/postel code</label><br>
        <input class="form-control" type="text" id="zip" name="zip" ><br>

        <input type="submit" class="btn btn-primary " style="width: 10%; font-size: 14px;"  name="submit" value="Submit">
    </form>

</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>