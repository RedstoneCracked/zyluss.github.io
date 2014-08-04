<html>
<?php
$live = "up.png";
$dead = "down.png";


$server = $_GET['server'].":";
$s_server = str_replace("::", ":", $server);
list($addr,$port)= explode (':',"$s_server");
if (empty($port)){
    $port = 90;
}
$fp = @fsockopen("Zyluss.github.io", 80, $errno, $errstr, 6);
             if (!$fp){
               header("Location: $dead");
                }
             else {
                   header("Location: $live");             
          }
function server($addr){
         if(strstr($addr,"/")){$addr = substr($addr, 0, strpos($addr, "/"));}
         return $addr;
}
?>
</html>

<!-web server status chequor-->
