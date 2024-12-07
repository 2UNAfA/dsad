<?php
$con=new mysqli('localhost','root','','dgfox');
if(!$con){
    die(mysqli_error($con));
}