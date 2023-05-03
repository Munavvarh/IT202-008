<?php
require(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

$db = getDB();
$user_id = get_user_id();
$stmt = $db->prepare("SELECT o.*, COUNT(orderitem.id) as item_count, SUM(orderitem.quantity * orderitem.unit_price) as total FROM Orders o JOIN OrderItems orderitem ON o.id = orderitem.order_id WHERE o.user_id = :user_id GROUP BY o.id ORDER BY o.created DESC LIMIT 10");
$stmt->bindValue(":user_id", $user_id);
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container-fluid">
    <h1>Purchase History</h1>
    <br>
    <?php if (count($orders) == 0) : 
        flash("No purchase history found");
    ?>
    <?php else : ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Item Count</th>
                    <th>Total Price</th>
                    <th>Created At</th>
                    <th>More Details</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order) : ?>
                    <tr>
                        <td><?php se($order, "id"); ?></td>
                        <td><?php se($order, "item_count"); ?></td>
                        <td>$<?php se($order, "total"); ?></td>
                        <td><?php se($order, "created"); ?></td>
                        <td><a href="<?php se("order_details.php?id={$order['id']}"); ?>">View Details</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

</div>

<?php require(__DIR__ . "/../../partials/flash.php"); ?>
