<?php
$xml=simplexml_load_file("xml.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
  echo $books->title['lang'] . ", ";
  echo $books->author . ", ";
  echo $books->year . ", ";
  echo $books->price . "<br>";
  $ids = array('023', '024');


}
?>