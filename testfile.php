<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	setlocale(LC_ALL, ''); // Locale will be different on each system.
	$amount = 1000000000.97;
	$locale = localeconv();

	echo $locale['currency_symbol'], number_format($amount, 2, $locale['decimal_point'], $locale['thousands_sep']);
	?>
</body>
</html>