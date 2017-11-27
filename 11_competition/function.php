<?php

/**
 * [getCateg description]
 * 
 * @param [type] $age    [description]
 * @param [type] $weight [description]
 * 
 
 * @return [type]         [description]
 */
function getCateg($age, $weight)
{
    if ($age<9) {
        return "hors catégorie";
    }

    if ($age>=9 and $age<=11) {
        if ($weight>32+10) {
            return "Benjamin";
        } 
        else {
            return "Poussin";
        }
    }

    if ($age>=12 and $age<=13) {
        return ($weight>=41+10) ? "Minime" : ($weight <= 41 - 10) ? "Poussin" : "Benjamin";
    }
    if ($age==14 and $age==15) {
        if ($weight>=50+10) {
            return "Cadet";
        } elseif ($weight<=50-10) {
            return "Benjamin";
        } else {
            return "Minime";
        }
    }

    if ($age>=16 and $age<=17) {
        if ($weight>=60+10) {
            return "Junior";
        } elseif ($weight<=60-10) {
            return "Minime";
        } else {
            return "Cadet";
        }
    }

    if ($age>=18 and $age<=20) {
        if ($weight>=68+10) {
            return "Senior";
        } elseif ($weight<=68-10) {
            return "Cadet";
        } else {
            return "Junior";
        }
    }

    if ($age>=21) {
        if ($weight<=74-10) {
            return "junior";
        } else {
            return "senior";
        }  
    }

}

echo getCateg(14, 40);