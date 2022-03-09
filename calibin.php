<?php

//ignore_user_abort(1); // run script in background
set_time_limit(0); // run script forever
//$interval=60*15; // do every 15 minutes...

$socket = stream_socket_server("tcp://0.0.0.0:8888", $errno, $errstr, );
if (!$socket) {
  echo "$errstr ($errno)<br />\n";
} else {
//set_time_limit(86400)
while ($conn = stream_socket_accept($socket, -1)) {
set_time_limit(86400);

 //if (isset($_POST)){

                        $fname = uniqid() . '.html';
                        $dir_path = "./odd/";
                        $file = fopen($dir_path . $fname,"w+");
                                                //$len = 1024 * 1024;
                        $text = stream_get_contents($conn);
	                $headhtml = file_get_contents("header.html");
                        $foothtml = file_get_contents("footer.html");
                        file_put_contents($dir_path . $fname, $headhtml . $text .$foothtml);
                        $site = "https://paste.ethicalslacker.net/odd";
                        fwrite ($conn,  "$site/$fname" . "\n");
                        fclose($file);
                        
              

	   fclose($conn);
}  
//fclose($socket);
}
?>

