<?php
define("read",true);
$title = "Member Area";

require_once(getcwd()."/resources/config.php");
include_once(getcwd()."/resources/header.php");
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	/*
http://www.freshdesignweb.com/beautiful-registration-form-with-html5-and-css3.html
*/

.form{
	background:#f1f1f1; width:470px; margin:0 auto; padding-left:50px; padding-top:20px;
}
.form fieldset{border:0px; padding:0px; margin:0px;}
.form p.contact { font-size: 12px; margin:0px 0px 10px 0;line-height: 14px; font-family:Arial, Helvetica;}

.form input[type="text"] { width: 400px; }
.form input[type="email"] { width: 400px; }
.form input[type="password"] { width: 400px; }
.form input.birthday{width:60px;}
.form input.birthyear{width:120px;}
.form label { color: #000; font-weight:bold;font-size: 12px;font-family:Arial, Helvetica; }
.form label.month {width: 135px;}
.form input, textarea { background-color: rgba(255, 255, 255, 0.4); border: 1px solid rgba(122, 192, 0, 0.15); padding: 7px; font-family: Keffeesatz, Arial; color: #4b4b4b; font-size: 14px; -webkit-border-radius: 5px; margin-bottom: 15px; margin-top: -10px; }
.form input:focus, textarea:focus { border: 1px solid #ff5400; background-color: rgba(255, 255, 255, 1); }
.form .select-style {
  -webkit-appearance: button;
  -webkit-border-radius: 2px;
  -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
  -webkit-padding-end: 20px;
  -webkit-padding-start: 2px;
  -webkit-user-select: none;
  background-image: url(images/select-arrow.png), 
    -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
  background-position: center right;
  background-repeat: no-repeat;
  border: 0px solid #FFF;
  color: #555;
  font-size: inherit;
  margin: 0;
  overflow: hidden;
  padding-top: 5px;
  padding-bottom: 5px;
  text-overflow: ellipsis;
  white-space: nowrap;}
.form .gender {
  width:410px;
  }
.form input.buttom{ background: #4b8df9; display: inline-block; padding: 5px 10px 6px; color: #fbf7f7; text-decoration: none; font-weight: bold; line-height: 1; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999; -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222; border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;}
.form input.buttom:hover	{ background-color: #2a78f6; }
/* CSS reset */
body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,p,blockquote,th,td { 
	margin:0;
	padding:0;
}
html,body {
	margin:0;
	padding:0;
	height: 100%;
}
table {
	border-collapse:collapse;
	border-spacing:0;
}
img { 
	border:0;
}
address,caption,cite,code,dfn,th,var {
	font-style:normal;
	font-weight:normal;
}
ol,ul {
	list-style:none;
}
caption,th {
	text-align:left;
}
h1,h2,h3,h4,h5,h6 {
	font-size:100%;
	font-weight:normal;
}
header{
	display: block;
}
/* General Demo Style */
body{
	font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
	background:url(images/bgnoise_lg.png);
	font-weight: 400;
	font-size: 15px;
	color: #3a2127;
	overflow-y: scroll;
}
a{
	color: #333;
	text-decoration: none;
}
.container{
	width: 100%;
	height: 100%;
	position: relative;
}
.clr{
	clear: both;
}
.container > header{
	padding: 20px 30px 20px 30px;
	margin: 0px 20px 10px 20px;
	position: relative;
	display: block;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
    text-align: center;
}
.container > header h1{
	position: relative;
	color: #498ea5;
	font-weight: 700;
	font-style: normal;
	font-size: 30px;
	padding: 0px 0px 5px 0px;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
}
.container > header h1 span{
	font-family: 'Alegreya SC', Georgia, serif;
	font-size: 20px;
	line-height: 20px;
	display: block;
	font-weight: 400;
	font-style: italic;
	color: #719dab;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}
.container > header h2{
	font-size: 16px;
	font-style: italic;
	color: #2d6277;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.8);
}
/* Header Style */
.freshdesignweb-top{
	line-height: 24px;
	font-size: 11px;
	background: rgba(0, 0, 0, 0.05);
	text-transform: uppercase;
	z-index: 9999;
	position: relative;
	box-shadow: 1px 0px 2px rgba(0,0,0,0.2);
}
.freshdesignweb-top a{
	padding: 0px 10px;
	letter-spacing: 1px;
	color: #333;
	text-shadow: 0px 1px 1px #fff;
	display: block;
	float: left;
}
.freshdesignweb-top a:hover{
	background: #fff;
}
.freshdesignweb-top span.right{
	float: right;
}
.freshdesignweb-top span.right a{
	float: left;
	display: block;
}
.freshdesignweb-demos{
    text-align:center;
	display: block;
	line-height: 30px;
	padding: 20px 0px;
}
.freshdesignweb-demos a{
    display: inline-block;
	margin: 0px 4px;
	padding: 0px 4px;
	color: #fff;
	line-height: 20px;	
	font-style: italic;
	font-size: 13px;
	border-radius: 3px;
	background: rgba(41,77,95,0.1);
	-webkit-transition: all 0.2s linear;
	-moz-transition: all 0.2s linear;
	-o-transition: all 0.2s linear;
	-ms-transition: all 0.2s linear;
	transition: all 0.2s linear;
}
.freshdesignweb-demos a:hover{
	background: rgba(41,77,95,0.3);
}
.freshdesignweb-demos a.current,
.freshdesignweb-demos a.current:hover{
	background: rgba(41,77,95,0.3);
}
</style>
<title>Demo Beautiful Registration Form with HTML5 and CSS3</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <!-- <a href="http://www.freshdesignweb.com" target="_blank">Home</a>
                <span class="right">
                    <a href="http://www.freshdesignweb.com/beautiful-registration-form-with-html5-and-css3.html">
                        <strong>Back to the freshdesignweb Article</strong>
                    </a> -->
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1>Registrasi Member Perpustakaan Simpang5</h1>
            </header>       
      <div  class="form">
    		<form id="contactform"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="Nama Lengkap" required="" tabindex="1" type="text"> 
    			 <fieldset>
                 <label>Tanggal Lahir</label><br>
                 <select class="select-style" name="tanggal" required="">
                 <option value=""></option>
                 	<?php
                 	for ($i=1;$i<=31;$i++) { 
                 		?>
                 		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                 		<?php
                 	}
                 	?>
                 </select>
                  <select class="select-style" name="bulan" required="true">
                  <option value=""></option>
                  <option value="01">January</option>
                  <option value="02">February</option>
                  <option value="03">March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  </select>
                  <select class="select-style" name="tahun" required="">
                  <option value=""></option>
                  	<?php
                  	$tahun_sekarang = date("Y");
                  	for ($i=2016;$i>=1990;$i--) { 
                  		?>
                  		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  		<?php
                  	}
                  	?>
                  	</select>
              </fieldset><br>
  			<p class="contact"><label for="name">Jenis Kelamin</label></p> 
            <select class="select-style gender" name="gender">
            <option value=""></option>
            <option value="m">Laki-laki</option>
            <option value="f">Perempuan</option>
            </select><br><br>
    			<p class="contact"><label for="email">E-Mail</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
                
                <p class="contact"><label for="username">Buat Username</label></p> 
    			<input id="username" name="username" placeholder="username" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="password">Buat Password</label></p> 
    			<input type="password" placeholder="*********************" id="password" name="password" required=""> 
                <p class="contact"><label for="repassword">Konfirmasi Password</label></p> 
    			<input type="password" placeholder="*********************" id="repassword" name="repassword" required=""> 
       
            
            <p class="contact"><label for="phone">Nomor HP</label></p> 
            <input id="phone" name="phone" placeholder="087123456789" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
</div>      
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
