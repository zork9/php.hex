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

include('util.php');
include('file.php');

$filename = "test";
$title = "HexString has been dumped";

$prevformputary = str_split($_POST["contents"]);
//printHexArrayToFile2($filename, $prevformputary);
printHexArrayToFile3($filename, $S_POST["contents"]);

printHeader($title);

//var_dump(str_split($_POST["contents"]));

echo '<form id="resubmit" method="post" action="init.php"> 
	reload : <input type="submit" name="reload" ><br>';
/***
<!--header("Location:./init.php");-->
<!-- JS alternative to load page
echo "<script> 
	location.replace($HTTP_ROOT + ./init.php);
	</script>";
	-->
***/

echo '</form>';

printBodyAndHTMLClose();

?>
