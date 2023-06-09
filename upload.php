How can you get someone's geolocation by clicking on a link?
yeah sure.

you can create your own IP Grabber tool and you can use your custom domain.

to do this programmatically, here is the code in PHP,

<?php 
  
 
  
$protocol = $_SERVER['SERVER_PROTOCOL']; 
$ip = $_SERVER['REMOTE_ADDR']; 
$port = $_SERVER['REMOTE_PORT']; 
$agent = $_SERVER['HTTP_USER_AGENT']; 
$ref = $_SERVER['HTTP_REFERER']; 
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']); 
  
//Print IP, Hostname, Port Number, User-Agent and Referer To Log.TXT 
  
$fh = fopen('log.txt', 'a'); 
fwrite($fh, 'IP Address: '."".$ip ."\n"); 
fwrite($fh, 'Hostname: '."".$hostname ."\n"); 
fwrite($fh, 'Port Number: '."".$port ."\n"); 
fwrite($fh, 'User Agent: '."".$agent ."\n"); 
fwrite($fh, 'HTTP Referer: '."".$ref ."\n\n"); 
fclose($fh); 
?> 
