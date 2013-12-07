<!-- Copyright (C) Johan Ceuppens 2013

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

var $title = "Hexdump to Server";

printHeader($title);

print "<form>
	hexdump : <input type="text" name="contents"><br>
	</form><br>";

var $filename = $HTTP_ROOT + '/hexdumps/' + './currentoutput.bin';###FIX multi clients

function printToFile($array)
{
	file_put_contents($filename, implode('', $array));
}

printBodyAndHTMLClose();

?>