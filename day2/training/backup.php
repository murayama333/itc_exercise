<?php
function backup($src, $dest){
  @mkdir($dest);
  $handle = opendir(".");
  while(false !== ($entry = readdir($handle))){
    if (is_file($entry)) {
      copy($entry, $dest . "/" . $entry);
    }
  }
  closedir($handle);
}

backup(".", date("Ymd"));
