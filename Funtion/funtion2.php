<?php
function connect_db(){
	$con = mysqli_connect("localhost","cistrain_bigza","bigmanmx2004","cistrain_bigza"); 
	//mysqli_connect("","ชื่อเข้าใช้","รหัส","ชื่อฐานข้อมูล")
	mysqli_set_charset($con,"utf8"); //เพื่อให้รองรับภาษาไทย
	return $con;

}
function select_menu($level){
	switch($level){
		case "Admin" : admin_menu();break;
		case "Student" : student_menu();break;
		case "Teacher" : teacher_menu();break;
	}
}

function admin_menu(){
	echo "<ul>
    <li class='dropdown'>
      <input type='checkbox' />
      <a href='index.php' data-toggle='dropdown'>Home</a>
      <ul class='dropdown-menu'>
        <li><a href='index.php'>Home</a></li>
      </ul>
    </li>
    <li class='dropdown'>
      <input type='checkbox' />
      <a href='index.php' data-toggle='dropdown'>Admin Menu</a>
      <ul class='dropdown-menu'>
        <li><a href='index.php?module=5&action=26'>เพิ่มผู้ใช้งาน</a></li>
		<li><a href='index.php?module=3&action=9'>เพิ่มข้อมูลนักศึกษา</a></li>
		<li><a href='index.php?module=2&action=18'>เพิ่มข้อมูลหลักสูตร</a></li>
		<li><a href='index.php?module=6&action=21'>Add Web Board</a></li>
      </ul>
    </li>
    <li class='dropdown'>
      <input type='checkbox' />
      <a href='index.php' data-toggle='dropdown'>Management</a>
      <ul class='dropdown-menu'>
        <li><a href='index.php?module=5&action=6'>จัดการข้อมูลผู้ใช้</a></li>
		<li><a href='index.php?module=3&action=10'>จัดการข้อมูลนักศึกษา</a></li>
		<li><a href='index.php?module=2&action=20'>จัดการข้อมูลหลักสูตร</a></li>
		<li><a href='index.php?module=6&action=25'>Web Board</a></li>
      </ul>
    </li>
    <li class='dropdown'>
      <input type='checkbox' />
      <a href='index.php?module=5&action=5' data-toggle='dropdown'>Logout</a>
      <ul class='dropdown-menu'>
	  <li><a href='index.php?module=5&action=5'>ออกจากระบบ</a></li>
      </ul>
    </li>
  </ul>";
}
?>