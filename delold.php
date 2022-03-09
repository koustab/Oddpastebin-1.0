// a simple small script runs with cron job to delete old file//

<?php
$x = 32000;  // 6 hours - 1*60*60
$current_time = time();
$path = './odd/';
$files = glob($path.'/*.*');
foreach($files as $file) {
 $file_creation_time = filemtime($file);
 $difference = $current_time - $file_creation_time;
  if(is_file($file)) {
    if ($difference >= $x) {
	unlink($file);
    }
  }
}
?>
