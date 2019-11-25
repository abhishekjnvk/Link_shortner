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
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php include 'inc/nav.php';?>

<?php
require('inc/function.php');
if (isset($_REQUEST['url'])){
	$url = stripslashes($_REQUEST['url']);          // removes backslashes
    $flag = checking_duplicate($url);
    if($flag==1){
        $id = check_for_id($url);
        echo "<center><h1 style='padding-left:5%;'>URL exist in our Database:</h1>";
        echo "<p style='padding-left:5%;'>Shorted URL&nbsp: <a href='http://frwd.tk/go.php?a=".$id."' alt='Shortened Link'>";
        echo "go.php?a=".$id."</a></p>";

        echo "<p style='padding-left:5%;'>URL&nbsp: <a href='$url' alt='Shortened Link'>";
        echo "$url</a></p></center>";    }
     
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
<br>
<button type="submit" class="submit" name="submit" value="Shorten Link">Shorten Link</button>
</form>
</div>
</center>
<?php include 'inc/footer.php';?>
<?php } ?>
</body>
</html>
