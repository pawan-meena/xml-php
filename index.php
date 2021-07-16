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
$xml=simplexml_load_file("xml/base.xml") or die("Error: Cannot create object");
$d=$xml->children();
$totalradio=count($d->radio->option);
$totalcheckbox=count($d->checkbox->option);
$totaldropdown=count($d->dropdown->option);
?>
<form method="post" action="insert.php">
<input type="email" name="email" placeholder="please enter your mail" required>	
<br>
<br>
<br>
<?php 
for ($i=0; $i <=$totalradio-1; $i++) { 
$c=$d->radio->option[$i];
$cc=$d->radio->selected[0];
	if ("$cc" == "$c"){	
?>
<input type="radio" checked="checked" id="<?php echo$d->radio->option[$i]; ?>" name="radio" value="<?php echo$d->radio->option[$i]; ?>">
<label for="<?php echo$d->radio->option[$i]; ?>" required> <?php echo$d->radio->option[$i]; ?></label><br>
<br>
<?php
}else{
?> 
<input type="radio" id="<?php echo$d->radio->option[$i]; ?>" name="radio" value="<?php echo$d->radio->option[$i]; ?>" required>
<label for="<?php echo$d->radio->option[$i]; ?>"> <?php echo$d->radio->option[$i]; ?></label><br>
<br>
<?php 
}}   
?>
<br>
<br>
<br>
<?php 
for ($i=0; $i <=$totalradio-1; $i++) { 
$c=$d->checkbox->option[$i];
$cc=$d->checkbox->selected[0];
	if ("$cc" == "$c"){	
?>
<input type="checkbox" checked="checked" id="<?php echo$d->checkbox->option[$i]; ?>" name="check[]" value="<?php echo$d->checkbox->option[$i]; ?>">
<label for="<?php echo$d->checkbox->option[$i]; ?>"> <?php echo$d->checkbox->option[$i]; ?></label><br>
<br>
<?php
}else{
?> 
<input type="checkbox" id="<?php echo$d->checkbox->option[$i]; ?>" name="check[]" value="<?php echo$d->checkbox->option[$i]; ?>">
<label for="<?php echo$d->checkbox->option[$i]; ?>"> <?php echo$d->checkbox->option[$i]; ?></label><br>
<br>
<?php 
}}   
?>
<br>
<br>
<br>
<label for="cars">dropdown list:</label>
<br><br>
<select name="dropdown" id="dropdown" required>

<?php 
for ($i=0; $i <=$totalradio-1; $i++) { 
$c=$d->dropdown->option[$i];
$cc=$d->dropdown->selected[0];
	if ("$cc" == "$c"){	
?>

  <option selected value="<?php echo$d->dropdown->option[$i]; ?>"><?php echo$d->checkbox->option[$i]; ?></option>
<br>
<?php
}else{
?> 
  <option value="<?php echo$d->dropdown->option[$i]; ?>"><?php echo$d->checkbox->option[$i]; ?></option>
<?php 
}}   
?>
</select>
<br>
<br>
<br>
<button type="submit" name="spawan">
send data
</button>
</form>
</body>
</html>









