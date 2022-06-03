<?php

function time2str($ts)
{
    if(!ctype_digit($ts))
        $ts = strtotime($ts);

    $diff = time() - $ts;
    if($diff == 0)
        return 'هم اکنون';
    elseif($diff > 0)
    {
        $day_diff = floor($diff / 86400);
        if($day_diff == 0)
        {
            if($diff < 60) return 'همین الان';
            if($diff < 120) return '1 دقیقه قبل';
            if($diff < 3600) return floor($diff / 60) . ' دقیقه قبل';
            if($diff < 7200) return 'یک ساعت قبل';
            if($diff < 86400) return floor($diff / 3600) . ' ساعت قبل';
        }
        if($day_diff == 1) return 'دیروز';
        if($day_diff < 7) return $day_diff . ' روز قبل';
        if($day_diff < 31) return ceil($day_diff / 7) . ' هفته قبل';
        if($day_diff < 60) return 'ماه قبل';
        return date('F Y', $ts);
    }
    else
    {
        $diff = abs($diff);
        $day_diff = floor($diff / 86400);
        if($day_diff == 0)
        {
            if($diff < 120) return 'در یک دقیقه';
            if($diff < 3600) return 'در ' . floor($diff / 60) . ' دیقیقه';
            if($diff < 7200) return 'در یک ساعت';
            if($diff < 86400) return 'در ' . floor($diff / 3600) . ' ساعت';
        }
        if($day_diff == 1) return 'فردا';
        if($day_diff < 4) return date('l', $ts);
        if($day_diff < 7 + (7 - date('w'))) return 'هفته بعد';
        if(ceil($day_diff / 7) < 4) return 'در ' . ceil($day_diff / 7) . ' هفته';
        if(date('n', $ts) == date('n') + 1) return 'ماه بعد';
        return date('F Y', $ts);
    }
}

?>