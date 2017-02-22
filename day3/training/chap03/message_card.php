<?php
require("functions.php");
$records = get_csv_data("message.csv");
$keyword = "";
if (isset($_GET["keyword"]) && $_GET["keyword"] !== "") {
  $keyword = $_GET["keyword"];
  $records = search($records, $keyword);
}
?>

<?php include("header.php"); ?>

<?php include("search.php"); ?>

<div class="row">
<?php
  $i = 0;
  foreach ($records as $record) {
?>
  <?php if($i != 0 && $i % 3 == 0) { ?>
    </div>
    <div class="row">
  <?php }?>
  <div class="col s12 m6 l4">
    <div class="card-panel">
      <?php h($record[2]) ?><br>
      <?php h($record[1]) ?>
    </div>
  </div>
<?php
}
?>
</div>

<?php include("footer.php"); ?>
