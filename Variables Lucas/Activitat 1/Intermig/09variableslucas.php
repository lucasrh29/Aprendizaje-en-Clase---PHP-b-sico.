<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php
$carta1 = rand(1,10);
$carta2 = rand(1,10);
$carta3 = rand(1,10);
print "Aquestes son les cartes que han sortit $carta1, $carta2, $carta3 <br>";
$max = max($carta1,$carta2,$carta3);
print "La carta més alta es aquesta: $max";
print "<div style='display:flex; gap:10px; align-items:center;'>";
print "<img src='img/c$carta1.svg' alt='carta $carta1' width='100'>";
print "<img src='img/c$carta2.svg' alt='carta $carta2' width='100'>";
print "<img src='img/c$carta3.svg' alt='carta $carta3' width='100'>";
print "</div>";
?>
</body>
</html>