<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Thêm Mới Khách Hàng</title>
<style>
.container{
    background-color:#FAFAD2;
    font-size:16px;
    margin-left: 600px;
    width:300px;
    height:450px;
    font-family:"Courier New",
    Courier, monospace;
    }
    .text1{color:Black; margin:auto; margin-left:50px;}
    .text2{color:#C00; width:250px; height:20px; margin-top:10px; margin-left:5px;}
    .input{width:150px; height:20px; margin-top:10px;}
    .inputtext{ width:150px; height:20px; margin-top:10px;}
    .inputradio{ width:10px; height:10px; margin-top:10px;}
    .select{width:100px; font-family:"Courier New",
    Courier, monospace; margin-top:10px;}
    .inputsubmit{ width:150px; height:30px; font-family:"Courier New", Courier, monospace; background-color:#F0C; color:#00C; font-size:18px;}
    </style>
    </head>
<body>
<div style ="background-color: #FAFAD2;">
<form method="post">
<div class="container">
<div class="text1"><B>Thêm Khách Hàng Mới</B></div>
<div class="text2">Tên Khách Hàng</div>
<div><input type="text" name="txtten" class="inputtext"/></div>
<div class="text2">Giới Tính</div>
<div><input type="radio" class="inputradio" name="gt" value="nam"/>Nam <input type="radio" class="inputradio" name="gt" value="nam"  />Nữ</div>
<div class="text2">Quê Quán Khách Hàng</div>
<div><select name="txtquequan" class="select">
<option>Hà Nội</option>
<option>HCM</option>
<option>Bình Dương</option>
<option>Hà Nam</option>
<option>Cao Nguyên</option>
    </select>
    </div>
 <div class="text2"> Điện Thoại Khách Hàng</div>
<div><input type="number" name="txtdt" class="inputtext"/></div> 
 <div class="text2"> Email Khách Hàng</div>
<div><input type="text" name="txtemail" class="inputtext"/></div>
<div color="#C00">
<label for="password">Mật khẩu</label><br>
<input type="password" placeholder="******" name="password" id="password"><br>
<label for="password-repeat">Nhập lại mật khẩu</label><br>
<input type="password" placeholder="******" name="password-repeat" id="password-repeat">
</div>
<div><input type="submit" name="ok" value="Them moi" class="inputsubmit"/></div>
<div><a href="trangchu.php">↺Quay lại trang chủ</a></div>
</div> 
</form>
</div>
<?php
    include('connect.php');
    if(isset($_POST['ok']))
    {
        $ten=$_POST['txtten'];
        $gioitinh=$_POST['gt'];
        $quequan=$_POST['txtquequan'];
        $dienthoai=$_POST['txtdt'];
        $email=$_POST['txtemail'];
        $password=$_POST['password'];
        $repassword=$_POST['password-repeat'];
        {
            $sqlcheck="select * from khachhang where email='$email'";
            $runcheck=mysqli_query($conn,$sqlcheck);
            $numcheck=mysqli_num_rows($runcheck);
            if($numcheck==1)echo "email này đã có, vui lòng thử lại!";
            else
        {
        $sql="insert into khachhang (name,gender,phone,email,password,password-repeat) values('$ten','$gioitinh',$dienthoai,'$email','$password','$password-repeat')";
        echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="formdangnhap.php";</script>';
        $run=mysqli_query($conn,$sql);
        if($run) echo "Thêm Mới Thành Công!";
        else echo "Thêm Mới Không Thành Công!";
        }
        }}
?>
</body>
</html>