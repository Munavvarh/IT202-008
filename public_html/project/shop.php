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
// ucid mab265 and date:04/25/2023
if (isset($_POST["itemName"]) || isset($_POST["itemCategory"])) {
    $db = getDB();
    $name = isset($_POST["itemName"]) ? $_POST["itemName"] : "";
    $category = isset($_POST["itemCategory"]) ? $_POST["itemCategory"] : "";
    $orderBy = "";
    if (isset($_POST["sortByPrice"])) {
        if ($_POST["sortByPrice"] === "asc") {
            $orderBy = "ORDER BY unit_price ASC";
        } elseif ($_POST["sortByPrice"] === "desc") {
            $orderBy = "ORDER BY unit_price DESC";
        }
    }
    $stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility FROM Products WHERE name LIKE :name AND (category = :category OR :category = '') $orderBy LIMIT 10");
    try {
        $stmt->execute([":name" => "%" . $name . "%", ":category" => $category]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log(var_export($e, true));
        flash("Error fetching records", "danger");
    }
}
?>
<div class="container-fluid">
    <h1>Shop</h1>
    <form method="POST" class="row row-cols-lg-auto g-3 align-items-center">
        <div class="input-group mb-3">
            <input class="form-control" type="search" name="itemName" placeholder="Item Filter" value="<?php se($_POST, 'itemName'); ?>" />
            <input class="form-control" type="search" name="itemCategory" placeholder="Category Filter" value="<?php se($_POST, 'itemCategory'); ?>" />
            <select class="form-select" name="sortByPrice">
                <option value="">Sort by Price</option>
                <option value="asc" <?php if (isset($_POST['sortByPrice']) && $_POST['sortByPrice'] === 'asc') echo 'selected'; ?>>Low to High</option>
                <option value="desc" <?php if (isset($_POST['sortByPrice']) && $_POST['sortByPrice'] === 'desc') echo 'selected'; ?>>High to Low</option>
            </select>
            <input class="btn btn-primary" type="submit" value="Search" />
        </div>
    </form>
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
                        Cost: <?php se($item, "unit_price"); ?>
                        <form method="POST" action="cart_alt.php">
                            <input type="hidden" name="product_id" value="<?php se($item, "id"); ?>" />
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