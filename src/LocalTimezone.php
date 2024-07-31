<?php

namespace Iroid\LocalTimezone;

use Carbon\Carbon;

class LocalTimezone
{
    /**
     * Convert a given timestamp to the user's local time.
     *
     * @param string $timestamp
     * @param string|null $format
     * @return string
     */
    public static function convertToLocalTime($timestamp, $format = 'Y-m-d H:i:s')
    {
        session_start();
        $timezone=$_SESSION['usertimezone'];
        $carbon = Carbon::parse($timestamp);
        return $carbon->setTimezone($timezone)->format($format);
    }
}
