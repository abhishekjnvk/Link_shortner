<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/fonts.css">
<style>
button {
padding: 10px 25px 8px;
color: #fff;
background-color: #000000;
font-size: 16px;
border: 1px solid #333;
border-radius: 2px;
margin-top: 10px;
cursor:pointer;
}
</style>
<title>link Shortner</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php include 'inc/nav.php';?>

<?php
require('inc/function.php');
if (isset($_REQUEST['url'])){
	$url = stripslashes($_REQUEST['url']);          // removes backslashes
	$title = stripslashes($_REQUEST['entry']); // removes backslashes
    $flag = checking_duplicate($url);
    if($flag==0){
        $flag = insert_into_database($url,$title);
    }
      if($flag==1){
        $id = check_for_id($url);
        echo "<h1 style='padding-left:5%;'>Here's your URL:</h1>";
        echo "<p style='padding-left:5%;'>Shorted URL&nbsp: <a href='go.php?a=".$id."' alt='Shortened Link'>";
        echo "go.php?a=".$id."</a></p>";

        echo "<p style='padding-left:5%;'>URL&nbsp: <a href='go.php' alt='Shortened Link'>";
        echo "$url</a></p>";

      }
    }
    else{
?>
<center>
<br>
<br>
<div class="form">
<h1>Shorten a Link</h1>
<form name="registration" method="post">
<input type="text" name="url" placeholder="URL to Shorten" required />
<input type="text"  id="entry" name="entry" placeholder="Custom Text" required />
<br>
<button type="submit" class="submit" name="submit" value="Shorten Link">Shorten Link</button>
</form>
</div>
</center>
<?php include 'inc/footer.php';?>
<?php } ?>
</body>
</html>
