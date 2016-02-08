<?php

$page = $_SERVER['PHP_SELF'];
$sec = "5";

foreach (glob('../images/*.jpg') as $f) {
    # store the image name
    $list[] = $f;
}

sort($list);                    # sort is oldest to newest,

for ($i = 1; $i <= 10; $i++) {
$filename = array_pop($list);
echo '<img src="../images/'.$filename.'" alt="Picture not found!" width="648" height="486" class="img1">';

$filename = array_pop($list);
echo '<img src="../images/'.$filename.'" alt="Picture not found!" width="648" height="486" class="img2">';
}

?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">    
<link rel="stylesheet" 
  href="style.css" type="text/css">
</head>
    <body>
    </body>
</html>
