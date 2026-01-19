<html>
<head>
<title>Page Title</title>
</head>
<body>
<?php
$dau1 = rand(1,6);
$dau2 = rand(1,6);
print "Al primer dau ha sortit: $dau1 <br>";
print "Al segon dau ha sortit: $dau2 <br>";
$suma = $dau1 + $dau2;
$resta = $dau1 - $dau2;
$div = $dau1 / $dau2;
$mult = $dau1 * $dau2;
print "La suma dels dos daus és: $suma <br>";
print "La resta dels dos daus és: $resta <br>";
print "La divisió dels dos daus és: $div <br>";
print "La multiplicació dels dos daus és: $mult <br>";
print "<div style='display:flex; gap:10px; align-items:center;'>";
print "<img src='img/$dau1.svg' alt='dau $dau1' width='100'>";
print "<img src='img/$dau2.svg' alt='dau $dau2' width='100'>";
print "</div>";
?>
</body>
</html>