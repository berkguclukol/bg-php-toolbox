<?php
class Toolbox
{
    /**
     * @param $string
     * @param $values
     * @return string
     * @example createStringWithFormat("There are {0} new members today and {1} yesterday.", array("15", "45"))
     * @result There are 15 new members today and 45 yesterday.
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
     * @example Toolbox::createSpecialVersion("2024-01-01")
     * @result v1.8
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

    /**
     * @param $directory
     * @return array
     * @throws Exception
     * @example Toolbox::getItemsInDirectory("./")
     * @result Array ([0] => LICENSE [1] => README.md [2] => Toolbox.php)
     */
    static function getItemsInDirectory($directory): array
    {
        $returns = [];
        if ($handle = opendir($directory)) {
            while (false !== ($file = readdir($handle))) {
                if ($file[0] != ".") {
                    $returns[] = $file;
                }
            }
            closedir($handle);
        }
        return $returns;
    }



}