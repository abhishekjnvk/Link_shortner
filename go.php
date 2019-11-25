<?php
include('inc/function.php');
if(isset($_GET['a']))
{
$ab = $_GET['a'];
$get_id = "SELECT * FROM urls WHERE id ='$ab'";
$run_url = mysqli_query($con, $get_id);
$fetched_url= mysqli_fetch_array($run_url);
$new_url=$fetched_url['url'];
echo $new_url;
}
?>
<title><?php echo $fetched_url['entry'];; ?></title>
<meta http-equiv="refresh" content="0; url=<?php echo $new_url; ?>" />
