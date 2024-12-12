<?php

function check_login($conn)
{
if(isset($_SESSION['email'] ))
{
 $email = $_SESSION['email'];
 $query = "select * from usuario where email = '$email' limit 1";

$result = mysqli_query($conn,$query);
if($result && mysqli_num_rows($result) > 0)
{
 $userdata = mysqli_fetch_assoc($result);
 return $userdata;
}
}
exit;
}

?>