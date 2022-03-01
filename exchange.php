<html>
<head>
    <title> Quick Exchange Service </title>
</head>
<body>
<h2> Quick Exchange Service </h2>
<?php
$kroner = $_GET['money'];
$fee = 20.0;
if($kroner > $fee) {
    $dollars = ($kroner - 20.0) / 8.43;
    $dollars = number_format($dollars, 2, ",", ".");
    echo "For kr. $kroner you receive \$$dollars";
} else {
    echo "We charge 20 dkk fee. The amount must be larger then 20";
}
?>

<p>
    <a href="exchange.html">New Computation</a>
</p>
</body>
</html>