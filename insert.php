<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pawan Xml</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.png">
</head>
<body>
<?PHP
function c_element($e_name,$parent){
 global $xml;
 $node=$xml->createElement($e_name);
 $parent->appendChild($node);
 return $node;
 }
function c_value($value,$parent){
 global $xml;
 $value = $xml->createTextNode($value);
 $parent->appendChild($value);
 return $value;
 }
?>
<?PHP
$er='';
if (isset($_POST['spawan'])) {
$radiov = $_POST['radio'];
$emailv = $_POST['email'];
$xmll=simplexml_load_file("xml/userfilldata.xml") or die("Error: Cannot create object");
$d=$xmll->children();
$totaluser=count($d->user);
for ($i=0; $i <$totaluser-1 ; $i++) { 
$ce=$d->user[$i]->attributes()['email'];
if ($emailv==$ce) {
	$er=1;
	break;
}
}
if ($er==1) {
	echo "your already exist";
}
else {
$dropdownv = $_POST['dropdown'];
$xml =new DOMDocument("1.0" , "UTF-8");
$xml->load("xml/userfilldata.xml");
$root=$xml->getElementsByTagName("users")->item(0);
$user=c_element("user",$root);
$user->setAttribute("email",$emailv);
$radio=c_element("radio", $user);
c_value($radiov,$radio);
$dropdown = c_element("dropdown", $user);
c_value($dropdownv,$dropdown);
$arr =$_POST['check'];
$checkv=implode(", ",$arr);
$checkbox=c_element("checkbox", $user);
c_value($checkv,$checkbox);
$xml->FormatOutput=true;
$xml->save("xml/userfilldata.xml");
}
?>
<br><br><br><hr>
<a href="myform.php"><button>Check Your Data Now!</button></a><hr><?php
}
?></body></html>