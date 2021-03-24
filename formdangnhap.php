<?php session_start()
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
.container{
	background-color:#FAFAD2;
	font-size:16px;
	width:500px;
	height:300px;
	font-family:"Courier New",
	Courier, monospace;
	}
	.text1{color:black; margin:auto; margin-left:50px; font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif; font-size:24px}
	.text2{color:black; float:left; width:250px; height:20px; margin-top:10px; margin-left:5px; font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif}
	.input{width:170px; height:20px;;}
	.inputsubmit{ width:150px; height:30px; font-family:"Courier New", Courier, monospace; background-color:#FFF; color:#000; font-size:18px; margin-left:200px; margin-top:20px;}
    </style>
</head>
<body>
<form method="post">
<div align="center"><div class="container"><div align="center">
<div class="text1"><B>Login</B></div>
<div class="text2" ><B>Email</B></div>
<div style="margin-top:10px;" ><input type="text" name="txtten" placeholder="Email" class="input"/></div>
<div class="text2"><B>Password</B></div>
<div style="margin-top:10px; text-align:center"><input type="password" name="txtpass" placeholder="Password" class="input"/></div>
<div style="margin-left:10px"><input type="submit" name="ok" value="Login" class="inputsubmit"/></div>
<div><a href="trangchu.php">↺Quay lại trang chủ</a></div>
<div style ="clear: both;"><footer style="background-color: #FAFAD2;"><h1>&#9742; 0374527580</h1>
    <a href="https://www.facebook.com/ngo.tan.10420321/"><h1>Ⓕ My Facebook</h1></a>
   </footer></div>
</div></div>
<?php
include('connect.php');
if(isset($_POST['ok']))
{
	$user=$_POST['txtten'];
	$pass=$_POST['txtpass'];
	if(empty($user)||empty($pass)) echo" CHƯA NHẬP DỮ LIỆU!";
	else{
	$sql="select *from dangnhap where email='$user'";
	$run=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($run);
	if($num==1)
	{$_SESSION['user']=$user;
		$row=mysqli_fetch_array($run);
	$pw=$row['password'];
	if($pass==$pw)
	header('location:sanpham.php');
	else echo "<script>alert('Sai Password!')</script>";
		}
		else echo "<script>alert('Sai email!')</script>";
}}
?>
</body>
</html>