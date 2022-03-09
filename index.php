<?php
   if (substr_count($_SERVER[HTTP_ACCEPT_ENCODING], gzip))
   ob_start(ob_gzhandler);
   else ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>[oddpaste]</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
  <body>
<div id="pagewrap">

        <header>
           <nav>
                        <ul>
                                                <li><a href="licence.html" title="Licence">Licence</a></li>
                                                <li><a href="docs.html" title="docs">Docs</a></li>
                                        </ul>
           </nav>
       </header>


<aside id="sidebar"> <body style="background-color: white;">
    <form name="savefile" method="post" action="">
               <textarea rows="25" cols="150" name="textdata"></textarea><br/>
        <input type="submit" name="submitsave" value="Paste">

</form>
    <?php
    if (isset($_POST)){
                    if ($_POST['submitsave'] == "Paste") {
          		$fname = uniqid() . '.html';
                        //change the following like ( $dir_path = "./odd/"; ) if you want to have a different dir name 
			$dir_path = "./odd/";
	    		$file = fopen($dir_path . $fname,"a+");
	                $text = $_POST["textdata"];
            	    	$headhtml = file_get_contents("header.html");
            		$foothtml = file_get_contents("footer.html");
            		file_put_contents($dir_path . $fname, $headhtml . $text .$foothtml);
            		$site = "https://paste.ethicalslacker.net/odd";
            	    	echo "<strong>Link :</strong>";
            		echo "<a href='$site/$fname'><strong>$site/$fname</a></strong>";
            		fclose($file);
      			}
    		}

    ?>

<footer>
        <a href=about.html>about</a> 
| <a href=search.php>archive</a>
 </br>an oddpastebin
| <span class="copyleft">&copy;</span> oddproject


</footer>
</div>
</body>
</html>


