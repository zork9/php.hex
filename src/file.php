<?php
/*
 Copyright (C) Johan Ceuppens 2013

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<?php

function printHexArrayToFilename($fn, $array)
{
	$filename = $fn;

	printHexArrayToFile($array);
}


function printHexArrayToFile($array)
{
	/* BFIX fopen and endianess */
	$fp = fopen($filename, "w+");	


	for ($i = 0; $i < length($array); $i++) {
		switch ($array[$i]) {
			case '0':
				fwrite($fp, hex2bin("0000"));
				break;
			case '1':	
				fwrite($fp, hex2bin("0001"));
				break;
			case '2':	
				fwrite($fp, hex2bin("0010"));
				break;
			case '3':	
				fwrite($fp, hex2bin("0011"));
				break;
			case '4':	
				fwrite($fp, hex2bin("0100"));
				break;
			case '5':	
				fwrite($fp, hex2bin("0101"));
				break;
			case '6':	
				fwrite($fp, hex2bin("0110"));
				break;
			case '7':	
				fwrite($fp, hex2bin("0111"));
				break;
			case '8':	
				fwrite($fp, hex2bin("1000"));
				break;
			case '9':	
				fwrite($fp, hex2bin("1001"));
				break;
			case 'A':	
			case 'a':	
				fwrite($fp, hex2bin("1010"));
				break;
			case 'B':	
			case 'b':	
				fwrite($fp, hex2bin("1011"));
				break;
			case 'C':	
			case 'c':	
				fwrite($fp, hex2bin("1100"));
				break;
			case 'D':	
			case 'd':	
				fwrite($fp, hex2bin("1101"));
				break;
			case 'E':	
			case 'e':	
				fwrite($fp, hex2bin("1110"));
				break;
			case 'F':	
			case 'f':	
				fwrite($fp, hex2bin("1111"));
				break;
			default:
				/* BFIX truncate file */	
				header('error.php');
				return -1;
				break;
			}
	}


	return 0;
}


function printArrayToFile($array)
{
	file_put_contents($filename, implode('', $array));
}

function printStringToFile($array)
{
	file_put_contents($filename, $array);
}

?>
