<?php session_start();?>
<?php
  @$database = include('database.php');
  if(!$database){ 
  $FATAL_ERROR = "  ทำการติดตั้งฐานข้อมูลก่อนทำงานของระบบก่อน  !";
}else{
  $db_username = isset($_SESSION['db_username']) ? $_SESSION['db_username'] : $database['mysqli']['username'];
  $db_password = isset($_SESSION['db_password']) ? $_SESSION['db_password'] : $database['mysqli']['password'];
  $db_server = isset($_SESSION['db_server']) ? $_SESSION['db_server'] : 'localhost';
  $db_name = isset($_SESSION['db_name']) ? $_SESSION['db_name'] : $database['mysqli']['dbname'];
  $prefix = isset($_SESSION['prefix']) ? $_SESSION['prefix'] : $database['mysqli']['prefix'];
  }
?>
<?php
/*
define('pageex', '<center><h3> ตัวอย่าง PHP INSERT Update Delete MySQL Data Through Bootstrap Modal </h3></center><br><hr>');
define('page1', 'ตัวอย่างที่ 1 การสร้างฟอร์ม');
define('ex', 'ตัวอย่างที่ 1 การสร้างฟอร์ม');
*/
@$value = $_GET['url'];
switch ($value) {
case "ex":
    $breadcrumb = $title = "ตัวอย่างการออกแบบฐานข้อมูล (Data dictionary)";
    break;
case "page1":
     $breadcrumb = $title = "ตัวอย่าง PHP INSERT Update Delete MySQL Data Through Bootstrap Modal";
    break;
case "page2":
     $breadcrumb = $title = "ตัวอย่าง  การสร้างฟอร์มสมัคร";
    break;
default:
       $breadcrumb = $title = "ตัวอย่าง  การสร้างเว็บไซต์";	
}
?>
