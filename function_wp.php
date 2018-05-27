<?php
function is_user_logged_in()
{
    return true;
}

function select_bg($color_name)
{
    $result = "";
    switch ($color_name) {
        case 'blue':
            $result = '#00c';
            break;
        case 'red':
            $result = '#c00';
            break;
        case 'green':
            $result = '#0c0';
            break;
    }
    return $result;
}

function get_users(){
    return array(
        array('id'=>'1','name'=>'ali'),
        array('id'=>'2','name'=>'Sammy'),
        array('id'=>'3','name'=>'Hamed'),
        array('id'=>'4','name'=>'Kaveh'),
        array('id'=>'5','name'=>'Elina'),
        array('id'=>'6','name'=>'Reza'),
    );
}