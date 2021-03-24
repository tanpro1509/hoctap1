<?php session_start()
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>sanpham</title>
</head>
<style>
.container{
    background-color:#6FF;
    margin-left:200px;
    font-size:16px;
    width:500px;
    height:250px;
    font-family:"Courier New",
    Courier, monospace;
    }
    .text1{color:#F00; margin:auto; margin-left:50px;}
    .text2{color:#C00; float:left; width:250px; height:20px; margin-top:10px; margin-left:5px;}
    .input{width:150px; height:20px; margin-top:10px; float: left;}
    .inputtext{ width:150px; height:20px; margin-top:10px;}
    .inputradio{ width:10px; height:10px; margin-top:10px;}
    .select{width:100px; font-family:"Courier New",
    Courier, monospace; margin-top:10px;}
    .inputsubmit{ width:150px; height:30px; font-family:"Courier New", Courier, monospace; background-color:#36C; color:#00C; font-size:18px;}
    </style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<div align="center"><div class="container"><div align="center">
<div class="text1"><B>Shop Bán Dép Đẹp</B></div>
<div class="text2">Name Product</div>
<div><input type="text" class="input" name="txtname"/></div>
<div class="text2">Code Product</div>
<div><input type="text" name="txtcode" class="input"/></div>
<div class="text2">Choice Category</div>
<div><select name="txtcate" >
   <option>Viet Nam</option>
   <option>Trung Quoc</option>
   </select></div>
<div class="text2">Money</div>
<div><input type="number" name="txtmoney" class="input"/></div>
<div class="text2">Description</div>
<div><textarea name="txtdes"></textarea></div>
<div class="text2">Picture</div>
<div><input class="input" name="txtpicture" type="file" value="Chọn tệp"/></div>
<div><input type="submit" class="inputsubmit" name="ok" value="Xác nhận"/></div>
</div></form>
<?php
include('connect.php');
if(isset($_POST['ok']))
{
    move_uploaded_file($_FILES['txtpicture']['tmp_name'],'img/'.$_FILES['txtpicture']['name']);
    $sql="insert into sanpham values('".$_POST['txtname']."','".$_POST['txtcode']."','".$_POST['txtcate']."','".$_POST['txtmoney']."','".$_POST['txtdes']."','".$_FILES['txtpicture']['name']."')";
    $run=mysqli_query($conn,$sql);
    if($run) echo "<script>alert('Succecful!')</script>";
    else echo "<script>alert('Not Succecful!')</script>";
}
    ?>
</body>
</html>