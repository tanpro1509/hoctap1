<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chào mừng bạn đến với website HoangAn.net</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
                <link rel="stylesheet" href="css/style.css"/>
<style>
.container{
    background-color:#FAFAD2;
    font-size:16px;
    width:2000px;
    height:auto;
    font-family:"Courier New",
    Courier, monospace;
    }
    .top{}
    .texttop{ width:1500px;text-align:center; height:50px}
    .center{}
    .text1{color:#F00; margin:auto; margin-left:50px;}
    .text2{color:#C00; float:left; width:250px; height:20px; margin-top:10px; margin-left:5px;}
    .input{width:150px; height:20px; margin-top:10px;}
    .inputtext{ width:150px; height:20px; margin-top:10px;}
    .inputradio{ width:10px; height:10px; margin-top:10px;}
    .select{width:100px; font-family:"Courier New",
    Courier, monospace; margin-top:10px;}
    .inputsubmit{ width:150px; height:30px; font-family:"Courier New", Courier, monospace; background-color:#36C; color:#00C; font-size:18px;}
    .double{
        border-style: double;
        border-color: red;
    }
    .color {text-align: center; color:red;}
    </style>
<body>

    <div class="container">
    <div class="top">
    <div class="texttop" style = "text-align: center;"><h1 style="color:red; font-size: 50px; font-weight: bold; margin-left: 600px;">Danh Sách Sản Phẩm</h1></div>
    <div class="center"></div>
    </div>
    <?php
        include('connect.php');
        $sql="select * from sanpham";
        $run=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($run))
        {
            ?>
        <div class="grid-container">
        <div style ="width:500px; height:auto;">
            <div style ="float: left; margin-left: 200px;">
        <img class="double" style =" width:200px; height: 200px; border-radius: 50px; " src="img/<?php echo $row['picture'];?>" class="img"/> <br>
        <div class="color"><b>Sản Phẩm:&#9758;</b><?php echo $row['name'];?></div>
        <div><b>Giá Tiền:&#9758;</b><?php echo $row['money'];?></div>
    </div>
   <?php }?>
   </div></div>
   <div style ="clear: both; margin-left: 200px;"><footer style="background-color: red;"><h1>&#9742; 0374527580</h1>
    <a href="https://www.facebook.com/ngo.tan.10420321/"><h1>Ⓕ My Facebook</h1></a>
   </footer></div>
</html>