<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";


//get the table definition
$result = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "modified", "created", "visibility"];
$db = getDB();
//get the item
$id = se($_GET, "id", -1, false);
$stmt = $db->prepare("SELECT * FROM $TABLE_NAME where id =:id");
try {
    $stmt->execute([":id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error looking up record", "danger");
}
//uses the fetched columns to map via input_map()
function map_column($col)
{
    global $columns;
    foreach ($columns as $c) {
        if ($c["Field"] === $col) {
            return input_map($c["Type"]);
        }
    }
    return "text";
}
?>
<div class="container-fluid">
    <h1>Product Details</h1>
    <?php foreach ($result as $column => $value) : ?>
        <?php if (!in_array($column, $ignore)) : ?>
            <div class="mb-4">
                <label class="form-label" for="<?php se($column); ?>"><?php se($column); ?>:</label>
                <span><?php se($value); ?></span>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    <div class="d-flex">
        <?php if (has_role("Admin")) : ?>
            <a href="<?php echo $BASE_PATH; ?>/admin/edit_item.php?id=<?php echo $result["id"]; ?>" class="btn btn-primary" style="width: 50%; font-size: 14px;">Edit</a>
        <?php endif; ?>
    </div>
</div>

<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/flash.php");
?>