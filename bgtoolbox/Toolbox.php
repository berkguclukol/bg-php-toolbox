<?php

namespace bgtoolbox;

use DateTime;
use Exception;

class Toolbox
{
    /**
     * @param $string
     * @param $values
     * @return string
     */
    static function createStringWithFormat($string, $values): string
    {
        for ($j=0; $j < count($values); $j++) {
            $string = str_replace("{".$j."}", $values[$j], $string);
        }
        return $string;
    }

    /**
     * @param $startDate
     * @return string
     * @throws Exception
     */
    static function createSpecialVersion($startDate): string
    {
        $start = new DateTime($startDate);
        $end = new DateTime();
        $difference = $end->diff($start);
        $years = $difference->y;
        $months = $difference->m;
        $days = $difference->d;
        $string = "v$years";
        $string .= ($months > 1) ? '.'.$months : '';
        $string .= ($days > 1) ? '.'.$days : '';
        return $string;
    }

}