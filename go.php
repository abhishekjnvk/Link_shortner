<?php
include('inc/function.php');
if(isset($_GET['a']))
{
$ab = $_GET['a'];
$get_id = "SELECT * FROM urls WHERE sl =$ab";
$run_url = mysqli_query($con, $get_id);
$fetched_url= mysqli_fetch_array($run_url);
$new_url=$fetched_url['url'];
echo $new_url;
}
?>






<br><br><br><center>
<?php echo $fetched_url['entry']; ?>
<p>Please wait we are redirecting you to the target url</p>


</center>
<script>
  setTimeout(function(){ window.location='<?=$fetched_url['url']?>' }, 3000);
</script>