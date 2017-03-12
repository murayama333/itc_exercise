<?php
$data = <<<__EOD__
<pages>
  <page>
    <name>kronos</name>
    <url>http://kronos.jp</url>
    <like>1000</like>
  </page>
  <page>
    <name>it caret</name>
    <url>https://itcaret.com</url>
    <like>10000</like>
  </page>
</pages>
__EOD__;

$xml = new SimpleXMLElement($data);
foreach ($xml->page as $page) {
  $name = strtoupper($page->name);
  echo "<a href=\"$page->url\">$name</a>" . PHP_EOL;
}
