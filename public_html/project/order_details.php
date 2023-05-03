<?php
require(__DIR__ . "/../../partials/nav.php");


is_logged_in(true);

$db = getDB();
$order_id = $_GET["id"]; 
$stmt = $db->prepare("SELECT * FROM Orders WHERE id = :order_id");
$stmt->execute([":order_id" => $order_id]);
$order = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$order) {
    flash("Invalid order ID", "danger");
    die(header("Location: $BASE_PATH/home.php"));
}

if (!has_role("Admin") && $order["user_id"] != get_user_id()) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/home.php"));
}


$stmt = $db->prepare("SELECT orderitem.quantity, orderitem.unit_price, p.name FROM OrderItems orderitem JOIN Products p ON orderitem.product_id = p.id WHERE orderitem.order_id = :order_id");
$stmt->execute([":order_id" => $order_id]);
$order_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container-fluid">
    <h1>Order Details</h1>
    <br>
    <?php $total = 0; ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($order_items as $item) : ?>
                <?php
                $subtotal = $item["quantity"] * $item["unit_price"];
                ?>
                <tr>
                    <td> <?php se($item, "name"); ?></td>
                    <td>$<?php se($item, "unit_price"); ?></td>
                    <td><?php se($item, "quantity"); ?></td>
                    <td>$<?php se($subtotal, "subtotal"); ?></td>
                    <?php $total += (int)se($subtotal, "subtotal", 0, false); ?>
                </tr>
            <?php endforeach; ?>


            <tr>
                <td colspan="100%"><strong class="label">Shipping Address: </strong><?php se($order["address"]); ?></td>
            </tr>
            <tr>
                <td colspan="100%"><strong class="label">Total: </strong>$<?php se($total); ?></td>
            </tr>
            <tr>
                <td colspan="100%"><strong class="label">Payment Method: </strong><?php se($order["payment_method"]);?></td>
            </tr>
            <tr>
                <td colspan="100%"><strong class="label">Item Purchased: </strong><?php se(count($order_items));?></td>
            </tr>
            <tr>
                <td colspan="100%"><strong class="label">Amount Paid: </strong>$<?php se($order["money_received"]);?></td>
            </tr>

        </tbody>

    </table>

</div>

<?php require(__DIR__ . "/../../partials/flash.php"); ?>
