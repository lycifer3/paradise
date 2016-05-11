<?php

/**
 * @param $data
 * @param $type
 * @param string $from
 * @param string $to
 * @return array|object|string
 */
function encoding($data, $type = TYPE_ARRAY, $from = 'cp1251', $to = 'utf-8') {
    if(is_array($data) OR is_object($data)) {
        $data = (array) $data;
        
        foreach($data as $key => $value) {
            if(is_array($value) OR is_object($value)) {
                $value      = (array) $value;
                $data[$key] = encoding($value);
            } else {
                $data[$key] = iconv($from, $to, $value);
            }
        }
    } else {
        $data = iconv($from, $to, $data);
    }
    
    if($type == TYPE_ARRAY) {
        return $data;
    } else {
        return (object) $data;
    }
}

/**
 * @param $date
 * @return string
 */
function good_date($date, $showTime = false) {
    $name_month = array('01' => 'Января',
                        '02' => 'Февраля',
                        '03' => 'Марта',
                        '04' => 'Апреля',
                        '05' => 'Мая',
                        '06' => 'Июня',
                        '07' => 'Июля',
                        '08' => 'Августа',
                        '09' => 'Сентября',
                        '10' => 'Октября',
                        '11' => 'Ноября',
                        '12' => 'Декабря');
                        
    $date  = strtotime($date);
    $month = $name_month[date('m', $date)];
    
    return date('j', $date) . " " . $month . " " . date('Y', $date) .
           (($showTime) ? (" " . date('H:i:s', $date)) : "");
}