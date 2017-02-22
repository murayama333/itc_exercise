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
foreach ($books as $book) {
    echo "$book->title: $book->price" . PHP_EOL;
}
