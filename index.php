<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8" />
   <title>Shop Bán Giày</title>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   <style type="text/css">
input[type="text"] {
      width: 130px;
      box-sizing: border-box;
      border: 1px solid black;
      border-radius: 4px;
      outline:none;
      padding: 12px 14px;
    }
    input[type="text"]:focus{
    width:150px;    
}
input[type="text"] {
      width: 130px;
      box-sizing: border-box;
      border: 1px solid black;
      border-radius: 4px;
      outline:none;
      padding: 12px 14px;

      transition:0.6s ease-in-out;
    }
    input[type="text"]:focus{
    width:500px; 
    background-color:lightpink;
}
body{background-color:#333300;
 
    text-align:center;
 
    }
 
    p{ color:#FFCC66;
 
    font-size:50px;
 
    }
    #menu ul li{
 
    margin:0;
 
    padding:0;
 
    text-align:center;
 
    display:inline;    }
 
    #menu li a{
 
    font-size:20px;
 
    font-weight:bold;
 
    color:#CC0033;
 
    padding: 0 15px;
 
    border-right:1px solid #00FF333;
 
    text-transform:uppercase;
 
    text-decoration:none;
 
    }
 
    #menu ul li:hover{background:white;}
    .double{
        border-style: double;
        border-color: red;
    }

    *{padding: 0; margin: 0;}
    header{ background: #FAFAD2; margin-top: 15px;}
    section{ background: #FAFAD2; margin-top: 5px;}
    article{ background: #FAFAD2; margin-top: 5px;}
    aside{ background: #FAFAD2; margin-top: 5px;}
    footer {background: #FAFAD2; margin-top: 5px;}
</style>
</head>
<body>
   <div class="container">
       <div class="row grid-demo">
           <div class="col-md-12">
               <header><div class="container">
    <h1><font style="background-color: red;" >&#9828;🅢🅗🅞🅟 Độ🅒 ➎&#9828;</font></h1></header>
    </div>
    <div>
    <ul>

        &#9758;<li><a href="trangchu.php">Trang chủ</a></li>

        &#9998;<li><a href="#">Giới thiệu</a></li>

        &#8694;<li><a href="dangky.php">Đăng Ký</a></li>

        <li><a href="formdangnhap.php">Đăng nhập</a></li>

        &#9742;<li><a href="#">Liên hệ</a></li>

    </ul>
    </div>
    <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
.container{
    background-color:#FAFAD2;
    background-size: cover;
    font-size:16px;
    width:auto;
    height:auto;
    font-family:"Courier New",
    Courier, monospace;
    }
    .top{}
    .texttop{ width:1024px;text-align:center; height:50px}
    .center{}
    .text1{color:#F00; margin:auto; margin-left:50px;}
    .text2{color:#C00; float:left; width:250px; height:20px; margin-top:10px; margin-left:5px;}
    .input{width:150px; height:20px; margin-top:10px;}
    .inputtext{ width:150px; height:20px; margin-top:10px;}
    .inputradio{ width:10px; height:10px; margin-top:10px;}
    .select{width:100px; font-family:"Courier New",
    Courier, monospace; margin-top:10px;}
    .inputsubmit{ width:150px; height:30px; font-family:"Courier New", Courier, monospace; background-color:#36C; color:#00C; font-size:18px;}
    </style>
           </div>
           <div class="col-md-3">
               <section>Left Menu (3 cột)</section>
           </div>
           <div class="col-md-6">
               <article>
                <div class="container">
    <div class="top">
    <div class="center"></div>
        <?php
        include('connect.php');
        $sql="select * from sanpham";
        $run=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($run))
        {
            ?>
        <div class="grid-container">
        <div style ="width:550px; height:auto;">
        <img class="double" style =" width:200px; height: 200px; border-radius: 50px; " src="img/<?php echo $row['picture'];?>" class="img"/>
        <?php }?></article>
           </div>
           <div class="col-md-3">
               <aside><b>HAHA</b></aside>
           </div>
           <div class="col-md-6">
               <footer>Footer (6 cột)</footer>
           </div>
           <div class="col-md-6">
               <footer>Footer (6 cột)</footer>
           </div>
       </div>
       <div>
</body>
</html>