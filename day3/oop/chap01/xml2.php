<?php
$data = <<<__EOD__
<books>
<book>
  <title>PHP Book</title>
  <price>1000</price>
</book>
<book>
  <title>HTML Book</title>
  <price>2000</price>
</book>
<book>
  <title>WordPress Book</title>
  <price>3000</price>
</book>
</books>
__EOD__;

$books = new SimpleXMLElement($data);

$total = 0;
foreach ($books as $book) {
  $total = $total + $book->price;
}
echo "TOTAL : $total" . PHP_EOL;
