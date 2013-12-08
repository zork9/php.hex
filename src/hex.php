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
