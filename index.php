<?php
//session_start();
//if($_SESSION['isActive'])header("Location: user/");

?>
<!DOCTYPE html>
<html lang="ru">

  <head>

<title>Main | T/null</title>
<style>
body{
background: url(bg-pattern.png),linear-gradient(to left,#7b4397,#dc2430);
}
h2{
	color:#fdcc52;
	    font-family: Catamaran,Helvetica,Arial,sans-serif;
		font-weight:200;
		text-shadow: 2px 2px 4px black; /* Параметры тени */
}
#leftmenu{
	margin-left:50px;
	margin-top:30px;
	background-color:rgba(255,255,255,0.4);
	padding:10px;
	min-width:100px;
	width:250px;
	-webkit-border-radius:5px;
	border:1px solid rgba(200,200,200,0.2);
	-webkit-box-shadow:2px 2px 4px 0px rgba(0,0,0,0.6);
}
#menulist a{
	color:white;
	font-family: Lato,Helvetica,Arial,sans-serif;
		font-weight:200;
		text-decoration:none;
		list-style-type: none;
	
}
#header{
	background-image: url(back.jpg) ;
	background-size: cover;
	height:160px;
	width:270px;
	margin-left:50px;
	margin-top:30px;
	-webkit-border-radius:5px;
	border:1px solid rgba(255,255,255,0.8);
	-webkit-box-shadow:2px 2px 4px 0px rgba(0,0,0,0.6);
}
#header h1{
	text-align:center;
	font-family: Consolas,Helvetica,Arial,sans-serif;
	color:#fdcc52;
	text-shadow: 2px 2px 4px black; /* Параметры тени */
}
#header h4{
	font-family: Consolas,Helvetica,Arial,sans-serif;
	font-weight:200;
	text-align:right;
	margin-right:5px;
	padding-right:5px;
	margin-bottom:3px;
	color:white;
	text-shadow: 1px 1px 2px black; /* Параметры тени */
}
</style>
<script>
window.onload = function(){

    (function(){


        var date = new Date();

        var time = date.getHours()+':'+date.getMinutes()+':'+date.getSeconds();
		//var date1 = date.getDay()+'.'+date.getMonth()+'.'+date.getFullYear();
		//var date1 = date.getDate('DD:MM:YYYY');
		document.getElementById('time_now').innerHTML = time;
		//document.getElementById('date_now').innerHTML = date1;
        window.setTimeout(arguments.callee, 1000);

    })();

};

</script>


  </head>

  <body id="page-top">
  <div id="header">
  <h1>T/Null lab.</h1>
  <h4>tools/sources<br>Временное веб убежище<br>Cur. Time: <span id="time_now"></span></h4>
  </div>
  
  
  
  <div id="leftmenu">
  <h2>Tools</h2>
  <ul id="menulist">
   <a href="translator/"><li>> Grid Cipher</li></a>
   <a href="fakegoogle/"><li>> Fake Google</li></a>
   <a href="spec_proj/"><li>> New project</li></a>

  
  </ul>
  </div>
  


	
  </body>

</html>
