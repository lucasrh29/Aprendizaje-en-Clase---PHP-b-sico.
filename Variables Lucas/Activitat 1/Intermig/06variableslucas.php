<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php

$r = rand(0, 255);
$g = rand(0, 255);
$b = rand(0, 255);

$color = "rgb($r, $g, $b)";

print "El color generat és: $color";
print "<div style='width:200px; height:100px; background-color:$color; border:1px solid #000;'></div>";
?>
</body>
</html>