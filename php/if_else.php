<?php
$label=null;
$color=null;

if(!empty($_GET)){
    $color = "#{$_GET['color']}";
}

if($color == "#ff0000"){
    $label="red";
}elseif($color == "#00ff00"){
    $label="green";
}elseif($color == "#0000ff"){
    $label="blue";
}else{
    $label = "unknown";
}

echo "<div style=\"color:{$color}\">The color is {$label}</div>";