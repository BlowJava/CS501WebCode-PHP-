<html>
<head>

</head>
<body>
<?php
$celsius = 54;
$fahrenheit = 86;
echo "Celsius - Farenheit Converter!"; 
?>
<br> <br> <?php
echo "Farenheit". " ". $fahrenheit ." "."to ". "C =" . ($fahrenheit - 32) * .5556  . " ". "Degree Celsius.";
?> <br><br>
<?php
echo "Celsius" .  " ". $celsius . " ".  "C = " . ($celsius * 1.8) + 32 . " ". "Degree Fahrenheit.";

?>


</body>
</html>