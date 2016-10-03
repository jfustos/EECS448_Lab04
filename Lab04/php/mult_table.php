<?php

function startTable( $name )
{
	echo "<h1>$name</h1>\n";
	echo "<table>\n";
	echo "<tr>\n";
	return;
}

function stopTable()
{
	echo "</tr>\n";
	echo "</table>\n";
	return;
}

function tableEntry( $value, $bold )
{
	$prefix = "";
	$postfix = "";
	if( $bold == 'BOLD' )
	{
		$prefix = "<b>";
		$postfix = "</b>";
	}
	
	echo "<td>$prefix$value$postfix</td>";
	return;
}

function nextRow()
{
	echo "\n</tr>\n<tr>\n";
	return;
}

startTable( "Multiplacation table from 1-100" );

for( $i = 0; $i <= 100; $i++ )
{
	tableEntry( "$i", 'BOLD' );
}

for( $r = 1; $r <= 100; $r++ )
{
	nextRow();
	tableEntry( "$r", 'BOLD' );
	
	for( $c = 1; $c <= 100; $c++ )
	{
		$total = $r * $c;
		tableEntry( "$total");
	}
}

stopTable();

?> 
