<?php
$myfile =  fopen("webdictionary.txt","r") or die("Unable to open file!");
while (!feof($myfile)){
   echo fgets($myfile) . "\n";
}
fclose($myfile);