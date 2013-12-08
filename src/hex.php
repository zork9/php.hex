<?php 
/* Copyright (C) Johan Ceuppens 2013

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.
*/
?>

<?php
/* example : hexbin('00FF FF8F 7F3F FF1F', true); */

function hexbin($hex, $padding = false) 
{ 
    // Validation 
    $hex = preg_replace('/^(0x|X)?/i', '', $hex); 
    $hex = preg_replace('/[[:blank:]]/', '', $hex); 
    if(empty($hex)) 
    { 
        $hex = '0'; 
    } 
    if(!preg_match('/^[0-9A-F]*$/i', $hex)) 
    { 
        trigger_error('Argument is not a hex', E_USER_WARNING); 
        return false; 
    } 
    
    // Conversion 
    $bin = ''; 
    $hex = array_reverse(str_split($hex)); 
    foreach($hex as $n) 
    { 
        $n = hexdec($n); 
        for($i = 1; $i <= 8; $i <<= 1) 
        { 
            $bin .= ($i & $n)? '1' : '0'; 
        } 
        if($padding) 
        { 
            $bin .= ' '; 
        } 
    } 
    return ltrim(strrev($bin)); 
} 

?>
