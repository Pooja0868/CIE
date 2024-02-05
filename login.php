<?php
session_start();
if($_REQUEST['name']=='pooja' && $_REQUEST['pwd']=='shubhangi')
{

header("location:frame.html");
}
else 
echo("<script LANGUAGE='JavaScript'>
    window.alert('Invalid Username And Password');
    window.location.href='login.html';
    </script>");
?>
