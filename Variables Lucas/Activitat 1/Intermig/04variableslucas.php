<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php
$radi = rand(5, 100);
echo "<svg width='200' height='200' xmlns='http://www.w3.org/2000/svg'>";
echo "<circle cx='100' cy='100' r='$radi' style='fill:blue;stroke:black;stroke-width:2' />";
echo "</svg>";

// Mostrem el valor del radi generat
echo "El radi del cercle és: $radi" ;
?>

</body>
</html>