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

<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>Name</th>
      <th>Message</th>
    </tr>
  </thead>
  <?php foreach ($records as $record) { ?>
    <tr>
      <td>
        <?php h($record[0]); ?>
      </td>
      <td>
        <?php h($record[1]); ?>
      </td>
      <td>
        <?php h($record[2]); ?>
      </td>
    </tr>
  <?php
  }
  ?>
</table>

<?php include("footer.php"); ?>
