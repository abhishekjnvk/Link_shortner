
<?php
$con = mysqli_connect("localhost","root","","tiny");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<?php
function checking_duplicate($url)
{
    global $con;
    $url = mysqli_real_escape_string($con,$url); //escapes special characters in a string

    $search_query="SELECT * FROM urls WHERE url='$url'";
    $fired_search=mysqli_query($con,$search_query);
    $search = mysqli_fetch_row($fired_search);
    $flag=0;
    if($search!=0){
        $flag=1;
    }
    return $flag;
}
function insert_into_database($url,$title){
    global $con;
    $url = mysqli_real_escape_string($con,$url); //escapes special characters in a string
  	$title = mysqli_real_escape_string($con,$title);
    $date = date("Y-m-d H:i:s");
    $query = "INSERT into `urls` (url, entry, date) VALUES ('$url', '$title', '$date')";
    $result = mysqli_query($con,$query);
    $flag =1;
    return $flag;
}

function check_for_id($url){
    global $con;
    $inserted = "SELECT sl FROM urls WHERE url='$url'";
    $fired_inserted=mysqli_query($con,$inserted);
    $sl = mysqli_fetch_array($fired_inserted)['sl'];
    return $sl;
}
?>
