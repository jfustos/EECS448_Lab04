<?php

include_once("header.php");

$userName = $_POST["userName"];
$password = $_POST["password"];
$numFoot = $_POST["numFoot"];
$numBasket = $_POST["numBasket"];
$numSoccer = $_POST["numSoccer"];
$shipping = $_POST["shipping"];

$subFoot   = $numFoot   * 15.00;
$subBasket = $numBasket * 12.00;
$subSoccer = $numSoccer * 17.00;

$ship_key = array(
	'50' => "Over Night",
	'5'  => "Three Day",
	'0'  => "Free 7 Day"
);

$shipString = $ship_key[$shipping];

$total = $shipping + $subFoot + $subBasket + $subSoccer;

echo "<h1> Thank you for your purchase!!! </h1>\n";
echo "user name:     $userName <br>\n";
echo "user password: $password <br>\n";

echo "<table>\n";
echo "<tr>\n";
echo "<td></td>    <td>Quantity</td><td>Cost Per Item</td><td>Sub Total</td>\n";
echo "</tr><tr>\n";
echo "<td>Footballs</td>   <td>$numFoot</td>   <td>$15.00</td>       <td>\$$subFoot</td>\n";
echo "</tr><tr>\n";
echo "<td>Basketballs</td> <td>$numBasket</td> <td>$12.00</td>       <td>\$$subBasket</td>\n";
echo "</tr><tr>\n";
echo "<td>Soccerballs</td> <td>$numSoccer</td> <td>$17.00</td>       <td>\$$subSoccer</td>\n";
echo "</tr><tr>\n";
echo "<td>Shipping</td>    <td colspan=\"2\">$shipString</td>        <td>\$$shipping</td>\n";
echo "</tr><tr>\n";
echo "<td colspan=\"3\">Total Cost</td>                              <td>\$$total</td>\n";
echo "</tr>\n";
echo "</table>\n";

include_once("footer.php");

?> 
