<?php
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'cashewdb');
if(mysqli_connect_error($db))
{
    die(mysqli_error($db));
}
?>
 