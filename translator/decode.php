<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Secrets.to</title>
	<style>
	.btn{
		height:40px;
		width:40px;
		margin:3px;
		
	}
	#btncon{
		width:330px;
		align:center;
	}
	
	</style>
  </head>
<h3>It works only with English - try to <a href="index.php">encode</a>.</h3>
  <body id="page-top">
    <form action="index.php" method="get"><center>
<div id="btncon">
  <?php 
  $alpha = array(
    1 => "_| ",
    2 => "|_| ",
	3 => "|_ ",
	4 => "] ",
	5 => "[] ",
	6 => "[ ",
	7 => "&macr;| ",
	8 => "|&macr;| ",
	9 => "|&macr; ",
	
	10 => "&bull;_| ",
	11 => "|&bull;_| ",
	12 => "|_&bull; ",
	13 => "&bull;] ",
	14 => "[&bull;] ",
	15 => "[&bull; ",
	16 => "&bull;&macr;| ",
	17 => "|&macr;|&bull; ",
	18 => "|&macr;&bull; ",
	
	19 => "> ",
	20 => "V ",
	21 => "< ",
	22 => "&Lambda; ",
	
	23 => "&bull;> ",
	24 => "V&bull; ",
	25 => "<&bull; ",
	26 => "&Lambda;&bull; ",
	27 => "  "
	
	
);

 $alpha1 = array(
    1 => "a",
    2 => "b",
	3 => "c",
	4 => "d",
	5 => "e",
	6 => "f",
	7 => "g",
	8 => "h",
	9 => "i",
	
	10 => "j",
	11 => "k",
	12 => "l",
	13 => "m",
	14 => "n",
	15 => "o",
	16 => "p",
	17 => "q",
	18 => "r",
	
	19 => "s",
	20 => "t",
	21 => "u",
	22 => "v",
	
	23 => "w",
	24 => "x",
	25 => "y",
	26 => "z",
	27 => " "
	
	
);
for($i=1;$i<28;$i++){
	
	
	

  printf ('<input type="button" id="%s" value="%s" class="btn" onClick="result.value+=\'%s\' "/>',$i,$alpha[$i],$alpha1[$i]);
  if($i==3 || $i==6 || $i==9 || $i==12 || $i==15 || $i==18 || $i==22 || $i==26){
	  echo '<br>';
  }
  if($i==9 || $i==18 || $i==22 || $i==26 ){
	  echo '<br>';
  }
}  
  ?><input type="button" id="30" value="CLR" class="btn" onClick="result.value='' "/>
  </div><br><br>
  <input type="text" readonly id="result"/>
  </center>
  </form>
  	<script>
	var result = document.getElementById('result');
	</script>
  <script>
  
  
  
  
  </script>
  <br><br><br>
<div><?php
/*
if(isset($_GET['text'])){$text=$_GET['text'];}
$text=strtolower($text);
$artxt=str_split($text);

$alpha = array(
    "a" => "_| ",
    "b" => "|_| ",
	"c" => "|_ ",
	"d" => "] ",
	"e" => "[] ",
	"f" => "[ ",
	"g" => "&macr;| ",
	"h" => "|&macr;| ",
	"i" => "|&macr; ",
	
	"j" => "&bull;_| ",
	"k" => "|&bull;_| ",
	"l" => "|_&bull; ",
	"m" => "&bull;] ",
	"n" => "[&bull;] ",
	"o" => "[&bull; ",
	"p" => "&bull;&macr;| ",
	"q" => "|&macr;|&bull; ",
	"r" => "|&macr;&bull; ",
	
	"s" => "> ",
	"t" => "V ",
	"u" => "< ",
	"v" => "&Lambda; ",
	
	"w" => "&bull;> ",
	"x" => "V&bull; ",
	"y" => "<&bull; ",
	"z" => "&Lambda;&bull; ",
	"," => ",",
	"." => ".",
	"?" => "?",
	"!" => "!",
	" " => "  ",
	
	
);


for($ini=0;$ini<strlen($text);$ini++){
	echo $alpha[$artxt[$ini]];
}
*/





?></div>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
	
  </body>

</html>
