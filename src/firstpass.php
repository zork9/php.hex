<!-- 
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
-->
<?php
var $title = HexString has been dumped";

printStringToFile($prevformput);

printHeader($title);


print "<form id="resubmit" method="post" action="init.php">" 
	. 
	"<input type="submit" name="reload"><br>";

/***
<!--header("Location:./init.php");-->
<!-- JS alternative to load page
print "<script> 
	location.replace($HTTP_ROOT + ./init.php);
	</script>";
	-->
***/

print "</form>";

printBodyAndHTMLClose();

?>
