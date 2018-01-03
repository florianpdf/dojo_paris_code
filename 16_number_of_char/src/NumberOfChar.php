<?php

namespace WCS;

/**
 * Class NumberOfChar
 *
 * @package WCS
 */
class NumberOfChar
{
    /**
     * @param string $str str
     * @return array
     */
    public static function countChar(string $str) :array
    {
    	// $str = 'AB';
	    $str = strtolower($str);
	    $str = preg_replace('/[^a-z]/','',$str);
	    $tabstr = str_split($str);
	    $result = [];
	    foreach($tabstr as $char)
	    {
	    	if (array_key_exists($char, $result)){
			    $result[$char]++;
		    } else {
	    		$result[$char] = 1;
		    }
	    }
    	return $result;
    }
}