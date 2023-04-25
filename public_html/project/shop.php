<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price FROM Products WHERE stock > 0 LIMIT 10");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
?>
<div class="container-fluid">
    <h1>Shop</h1>
    <div class="row row-cols-sm-2 row-cols-xs-1 row-cols-md-3 row-cols-lg-5 g-4">
        <?php
        foreach ($results as $item) : ?>
            <div class="col mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        Product Placeholder
                    </div>
                    <?php if (se($item, "image", "", false)) : ?>
                        <img src="<?php se($item, "image"); ?>" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: 200px;">
                    <?php endif; ?>

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                    </div>
                    <div class="card-footer">
                        Cost: <?php se($item, "cost"); ?>
                        <form method="POST" action="cart_alt.php">
                            <input type="hidden" name="item_id" value="<?php se($item, "id"); ?>" />
                            <input type="hidden" name="action" value="add" />
                            <input type="number" name="desired_quantity" value="1" min="1" max="<?php se($item, "stock"); ?>" />
                            <input type="submit" class="btn btn-primary btn-block" style="width: 50%; font-size: 14px;" value="Add to Cart" />
                        </form>
                        <div class="d-flex">
                            <a href="<?php echo $BASE_PATH; ?>/product_details.php?id=<?php se($item, "id"); ?>" class="btn btn-primary me-2" style="width: 50%; font-size: 14px;">Details</a>
                            <?php if (has_role("Admin")) : ?>
                                <a href="<?php echo $BASE_PATH; ?>/admin/edit_item.php?id=<?php se($item, "id"); ?>" class="btn btn-primary" style="width: 50%; font-size: 14px;">Edit</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>