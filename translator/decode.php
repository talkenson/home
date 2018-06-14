<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Secrets.to</title>
  </head>
<h3>It works only with English</h3>
  <body id="page-top">
    <form action="index.php" method="get">
  <input type="text" name="text" placeholder="Phrase"/>
  <input type="submit" value="Encode"/> 
  
  </form>
  <br><br><br>
<div><?php
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






?></div>

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
	
  </body>

</html>
