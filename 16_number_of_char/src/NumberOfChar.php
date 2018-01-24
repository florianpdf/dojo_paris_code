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
        $str = preg_replace("/[^a-z]/","",strtolower($str));
        $tab = str_split($str);

        $result= [];
        foreach ($tab as $char){
            if(!array_key_exists($char,$result)){
                $result[$char]=1;
            }else{
                $result[$char]++;
            }
        }
        arsort($result);
        return $result;
    }
}