<?php
function printobj($p1){
    if (is_string($p1)){
        echo $p1;
    }elseif (is_array($p1) || is_object($p1)){
        print_r($p1);
    }
}

function e($var, $colorClass = 's',$title="")
{
    if ($var == false) {
        echo "<span class='line {$colorClass}'>$title";
        var_dump($var);
        echo "</span>";
        return;
    }
    if (is_array($var)) {
        echo "<pre class='line " . $colorClass . "'>$title";
        print_r($var);
        echo "</pre>";
    } else {
        echo "<span class='line {$colorClass}'>$title" . $var . "</span>";
    }
}


function describeObject($name){
    if(!is_object($name) and !class_exists($name)){
        echo 'it is not an object or class !<br>';
        return;
    }
    if(is_string($name)){
        e("<b>Describe Class $name :</b>",'g');
    }else{
        e("<b>Describe Object of Class ".get_class($name)." : </b>",'g');
    }

    if(is_string($name)){
        e(get_class_vars($name),'b' , "<b>Properties : </b>");
    }else{
        e(get_object_vars($name),'b' , "<b>Properties : </b>");
    }
    e(get_class_methods($name),'b' , "<b>Methods : </b>");
}