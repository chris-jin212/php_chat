<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function get_post(string $par, string $parType = '') {

    return filter_input(INPUT_POST, $par, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

    if ($parType == '') {
        if (isset($par)) {
            $parType = gettype($par);
        }
    }


    switch ($parType) {
        case 'int':
            $return = filter_input(INPUT_GET, $par, FILTER_SANITIZE_NUMBER_INT);
            break;
    }
}

function get_var(string $par, string $parType = '') {

    return filter_input(INPUT_GET, $par);

    if ($parType == '') {
        if (isset($par)) {
            $parType = gettype($par);
        }
    }


    switch ($parType) {
        case 'int':
            $return = filter_input(INPUT_GET, $par, FILTER_SANITIZE_NUMBER_INT);
            break;
    }
}

function is_empty(string $par) {
    $work_str = trim($par);

    if (strlen($work_str) == 0) {
        return true;
    } else if ($work_str == "") {
        return true;
    }

    return false;
}

function get_formatted_date(string $date_record = null) {
    // echo $date_record . " ";
    if ($date_record == null) {
        return "";
    }
    if (is_empty($date_record) || strlen($date_record) < 2) {
        return "";
    }

    //$date = new DateTime($date_record);return $date->format('d-M-Y');
    //$date = date_create($date_record);return date_format($date, 'Y-m-d H:i:s');    

    return date("j M, Y", strtotime($date_record));
}

?>