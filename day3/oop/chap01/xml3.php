<?php
$data = "<fruits></fruits>";

$books = new SimpleXMLElement($data);
$add_book = $books->addChild("fruit");
$add_book->addChild("name", "Apple");
$add_book->addChild("price", 100);
echo $books->asXML();
