<!DOCTYPE html>
<html>
<style>
div {
    background-color: <?php echo "hsl(" . rand(0,360) . ", 50%, 50%)"; ?>;
    color: hsl(0, 0%, 100%);
    padding: 20px;
}
</style>
<body>
<?php

$color = rand(0, 360);
$hsl = "hsl($color, 100%, 50%)";
print"El color generat és: $hsl";

?>

<style>
div {
    background-color: hsl($color, 100%, 50%);
    color: hsl(0, 0%, 100%);
    padding: 20px;
}
</style>
<body>
<div>
<p>London is the capital city of England.
It is the most populous city in the United Kingdom,
with a metropolitan area of over 13 million inhabitants.</p>
</div> 
</body>
</html>
