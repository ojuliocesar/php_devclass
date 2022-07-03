<?php

function validate(array $fields) {

    $validate = [];

    $request = request();

    foreach ($fields as $key => $value) {

        switch ($value) {
            case 's':
                $validate[$key] = filter_var($request[$key], FILTER_UNSAFE_RAW);
                break;

            case 'e':
                $validate[$key] = filter_var($request[$key], FILTER_SANITIZE_EMAIL);
                break;

            case 'i':
                $validate[$key] = filter_var($request[$key], FILTER_SANITIZE_NUMBER_INT);
                break;

        }
    }
    
    return (object) $validate;
}

function isEmpty() {
    $request = request();

    foreach($request as $key => $valeu) {
        if (empty($request[$key])) {

            return true;
        }
    }

    return false;
}