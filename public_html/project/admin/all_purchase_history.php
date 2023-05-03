<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}

is_logged_in(true);

$db = getDB();
$stmt = $db->prepare("SELECT o.*, u.username, COUNT(oi.id) as item_count, SUM(oi.quantity * oi.unit_price) as total FROM Orders o JOIN Users u ON o.user_id = u.id LEFT JOIN OrderItems oi ON o.id = oi.order_id GROUP BY o.id ORDER BY o.created DESC LIMIT 10");
$stmt->execute();
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container-fluid">
    <h1>All Users Purchased History</h1>
    <br>
    <?php if (count($orders) == 0) : 
        flash("No purchase history found");
    ?>
    <?php else : ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Username</th>
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
                        <td><?php se($order, "username"); ?></td>
                        <td><?php se($order, "item_count"); ?></td>
                        <td>$<?php se($order, "total"); ?></td>
                        <td><?php se($order, "created"); ?></td>
                        <td><a href="<?php se("/project/order_details.php?id={$order['id']}"); ?>">View Details</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<?php require_once(__DIR__ . "/../../../partials/flash.php"); ?>
