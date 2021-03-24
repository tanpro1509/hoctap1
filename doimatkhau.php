<?php
session_start()
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Changepass</title>
<style>
.container{
    background-color:#FAFAD2;
    margin-left: 600px;
    font-size:16px;
    width:500px;
    height:200px;
    font-family:"Courier New",
    Courier, monospace;
    }
    .text1{color:black; margin:auto; margin-left:50px; font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif; font-size:24px}
    .text2{color:black; float:left; width:250px; height:20px; margin-top:10px; margin-left:5px; font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif}
    .input{width:170px; height:20px; margin-top:10px;}
    .inputsubmit{ width:150px; height:30px; font-family:"Courier New", Courier, monospace; background-color:#FFF; color:#000; font-size:18px; margin-left:200px; margin-top:20px;}
    </style>
</head>

<body>
<form method="post">
<div class="container">
<div class="text1" align="justify"><b>Change Pass</b></div>
<div class="text2">Mat khau cu</div>
<div>
<input type="password" name="txtpassold" placeholder="nhap mat khau cu" class="input"/>
</div>
<div class="text2">Mat khau moi</div>
<div>
<input type="password" name="txtpassnew" placeholder="nhap mat khau moi" class="input"/>
</div>
<div class="text2">Xac nhan mat khau</div>
<div>
<input type="password" name="txtrepass" placeholder="xac nhan mat khau moi" class="input"/>
<div><input type="submit" name="ok" value="Xac nhan" class="inputsubmit"/></div>
</div>
</div>
</form>
<?php
include ('connect.php');
if(isset($_POST['ok']))
{
    $passht=$_POST['txtpassold'];
    $newpass=$_POST['txtpassnew'];
    $repass=$_POST['txtrepass'];
    $session=$_SESSION['user'];
    if($newpass==$repass){
    $sql="select * from dangnhap where email='$session'";
    $run=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($run);
    $passdata=$row['password'];
    if($passht==$passdata)
    {
    $sql_pass="update dangnhap set password='$newpass'";
    $run_pass=mysqli_query($conn,$sql_pass);
    if($run_pass) echo "Cap nhat mat khau thanh cong";
    else echo "Khong doi mat khau duoc nhe";
        }
        else echo "Mat khau hien tai khong dung";
    }
    else echo "mat khau moi va nhap lai mat khau phai trung nhau";}
?>
</body>
</html>