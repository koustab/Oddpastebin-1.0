<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>[oddpaste]</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<link rel="stylesheet" type="text/css" href="assets/html.css">
<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
  <body>
<div id="pagewrap">

	<header>
           <nav>
                        <ul>
                                                <li><a href="licence.html" title="Licence">Licence</a></li>
                                                <li><a href="index.php" title="Home">Home</a></li>
                                        </ul>
           </nav>
  
	</header>
		
	<aside id="sidebar">


        <form method="POST" action="" class="search" enctype="multipart/form-data" autocomplete="off">
       <input type="text" name="query" maxlength=75 class="searchbox" minlength=3 placeholder="Enter keywords" required>
       <button type="submit"><i class="fa fa-search"></i></button>
</form>

</br>
</br>

<?php

        if(isset($_POST['query'])) { //only do file operations when appropriate
                $directory = "./odd/";
                $txts= glob($directory. "*.html") or DIE("Unable to open $directory");
                $results = false;
                $count = 0;
  foreach ($txts as $txt)
  // while(isset($found[$count]))
{
                $searchfor = $_POST['query'];
                $file = $txt;
                $contents = file_get_contents($file);
                $pattern = preg_quote($searchfor, '/');
                $pattern = "/^.*$pattern.*\$/m";

    if (preg_match_all($pattern, $contents, $matches)) {
        $path_parts = pathinfo($file);
        $filename = $path_parts['basename'];
        echo "<a href='$directory/$filename' target='_blank'>$filename </a><br />";

        echo implode("<\n>", $matches[0]);
        echo '<br>';
        //echo ".count($found).";
        $results = true;

    }
}
//else
         if (!$results) echo "<h2>Not Found</h2>";
        {
                  //echo 'No match found';
}
}
?>


	</aside>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>


<footer>
<center>        <a href=about.html>about</a> | <a href=download.html>download</a>
| <a href=search.php>archive</a>
| <a href=https//oddprotocol.org>donate</a>  </br>an oddpastebin
| <span class="copyleft">&copy;</span> oddproject
</center>


	</footer>

</div>
</body>
</html>
