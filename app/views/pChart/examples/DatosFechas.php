<?php
session_start();
$_SESSION['fecinic']=$_POST['ini'];
$_SESSION['fecfinc']=$_POST['fin'];

echo $_SESSION['fecinic'];
echo $_SESSION['fecfinc'];
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
