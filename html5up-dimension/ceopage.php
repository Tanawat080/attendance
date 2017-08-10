<?php session_start();?>
<?php

if (!$_SESSION["uname"]){  //check session

	  Header("Location: Login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}else{?>
<html>
	<head>
		<title>KSP CHECKING</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


	</head>


	<body background="/images/bg.jpg">
<!-- ล็อคเอ้าท์ -->
    <div align="right" class="a">
      <table border="1">
      		<td>
    		  <center> ลงชื่อเข้าใช้โดย :
    			<?php echo($_SESSION['uname']);?><br>
          ประเภทผู้ใช้งาน : <?php echo($_SESSION['typeUser']);?>
    			<?php //session_destroy();?>
    			<a href="logout.php">ออกจากระบบ</a></center>
        </td>
        </table>
    </div> <!-- จบล็อคเอ้าท์ -->

	</body>

</html>
<?php }?>
