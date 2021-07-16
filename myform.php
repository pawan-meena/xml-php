<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pawan Xml</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/favicon.png">
</head>
<body>
<?php
if (isset($_POST['spawan'])) {
$xml=simplexml_load_file("xml/userfilldata.xml") or die("Error: Cannot create object");
foreach ($xml->user as $message) {
$ce=$message->attributes()->email;
if ($ce==$_POST['email']) { ?>
<br><br><br>
<label> email :- </label><br>
<input type="text"  value="<?php echo $_POST['email']; ?>" readonly>
<br><br><br>
<label>  Radio :- </label><br>
<input type="text"  value="<?php echo$message->radio; ?>" readonly>
<br><br><br>
<label> Checkboxs :- </label><br>
<input type="text"  value="<?php echo$message->checkbox; ?>" readonly>
<br><br><br>

<label> Dropdown :- </label><br>
<input type="text"  value="<?php echo$message->dropdown; ?>" readonly>
<br><br><br>

<?php  break;
}
else {
	echo "enter right mail";
}
}
}
?>
<hr>
<br>
<br>
 <form method="post">
 	<input type="email" name="email" placeholder="enter mail for checking data" required>

<br>
<br>
 		<button type="submit" name="spawan">
show data
</button>
 </form></body></html>