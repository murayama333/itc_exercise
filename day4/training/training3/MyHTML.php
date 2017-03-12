<?php
class MyHTML
{
    public function a($url, $title)
    {
        echo "<a href=\"$url\">$title</a>" . PHP_EOL;
    }

    public function img($url, $alt = '')
    {
        echo "<img src=\"$url\" alt=\"$alt\" width=\"200px\"> " . PHP_EOL;
    }

    public function ulist($items)
    {
        echo "<ul>";
        for ($i = 0; $i < count($items); $i++) {
            echo "<li>$items[$i]</li>";
        }
        echo "</ul>";
    }
}
