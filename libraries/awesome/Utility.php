<?php
// Part of the library of Awesomeness
namespace Awesome;

/**
 * Class Utility
 */
class Utility
{
    /**
     * @param $string
     * @param $length
     * @param bool|false $stopanywhere
     * @return string
     */
    public static function truncate($string, $length, $stopanywhere = false)
    {
        if (strlen($string) > $length)
        {
            $string = substr($string,0,($length -3));

            if ($stopanywhere)
            {
                $string .= '...';
            }
            else
            {
                $string = substr($string,0,strrpos($string,' ')).'...';
            }
        }

        return $string;
    }

    // If you add anything here. It better be awesome.
}