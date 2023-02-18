<?php

$conn=mysqli_connect("localhost","root","","project_lms");

if(!$conn)
{
    echo "Sorry Connection Failed";
    exit();
}
