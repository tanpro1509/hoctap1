<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
<style>
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
    .color {text-align: center; color:red;}
    </style>
<body>
<div class="container">
    <h1><font style="background-color: red;" >&#9828;🅢🅗🅞🅟 Độ🅒 ➎&#9828;</font></h1>
<div id="menu">
    <div style = "margin-left: 900px; margin-top: 20px;"><form>
        &#10152;<input type="text" name="search" placeholder="Search..">
</form></div>
    <ul>

        &#9758;<li><a href="trangchu.php">Trang chủ</a></li>

        &#9998;<li><a href="danhsachsanpham.php">Danh Sách Sản Phẩm</a></li>

        &#8694;<li><a href="dangky.php">Đăng Ký</a></li>

        <li><a href="formdangnhap.php">Đăng nhập</a></li>

        &#9742;<li><a href="#">Liên hệ</a></li>

    </ul>
    </div>
    <div style="margin-left: 500px; color: green;"></div>
</body>
    <!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
aside{ background: blue; margin-top: 5px; height: 250px; line-height: 250px; color: white; font-size: 32px; text-align: center;}
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

#menu1 ul {
  background: red;
  width: 250px
  height: 350px;
  padding: 0;
  list-style-type: none;
  text-align: left;
  font-weight: bold;
  font-size:
}
#menu1 li {
  width: auto;
  height: 75px;
  line-height: 75px;
  border-bottom: 1px solid #e8e8e8;
  padding: 0 1em;
}
#menu1 li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
  display: block;
}
#menu1 li:hover {
  background: #CDE2CD;
}

    </style>
<body>
    <div class="container">
    <div class="top">
    <div class="center"></div>
    </div>
    <div id="menu1"><right style="margin-left: 1000px; width: 200px; height: 400px; margin-top: 30px;"><b>
    <div style="margin-left: 1500px; width: 200px;"><ul>
         <h1 style="background-color: Yellow;">Danh Mục Sản Phẩm</h1>

        <li>Giày Balenciaga</li>

        <li>Dép</li>

        <li>Giày Thể Thao</li>

        <li>Giày Sandal</li>
    </ul></div></b></right></div>
    <?php
        include('connect.php');
        $sql="select * from sanpham";
        $run=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($run))
        {
            ?>
        <div class="grid-container">
        <div style ="width:550px; height:auto;">
            <div style ="float: left;">
        <img class="double" style =" width:200px; height: 200px; border-radius: 50px; " src="img/<?php echo $row['picture'];?>" class="img"/><br>
        <div class="color"><b>Sản Phẩm:&#9758;</b><?php echo $row['name'];?></div>
        <div><b>Giá Tiền:&#9758;</b><?php echo $row['money'];?></div>
    </div>
        <?php }?>
   </div></div>
   <div style ="clear: both;margin-left: 500px;"><footer style="background-color: red;width:700px;"><h1>&#9742; 0374527580</h1>
    <a href="https://www.facebook.com/ngo.tan.10420321/"><h1>Ⓕ My Facebook</h1></a>
   </footer></div>
</body>
</html>