<?php

$items = [
    'for',
    'foreach',
    'while',
    'do-while'
];

echo 'PHP Supports ' . count($items) . ' types of loops'; 
/*
$li='';

for($i=0; $i<count($items); $i++){

}$li .= "<li>{$items[$i]}</li>";
}

*/

/*foreach($items as $item){
    $li .= "<li>{$item}</li>";
*/

/*$count = count($items);
$i=0;
$li=null;
while($i<count){
    $li .= "<li>{$items[$i]}</li>";
    $i++;
}
echo "<ul>{$li}</ul>"*/

$count=count($items);
$i=count($items);
$li=null;
do {
    $li .= "<li>{$items[--$i]}</li>";
} while ($i>0);

echo "<ul>{$li}</ul>";



/*while($i<count){
    $li .= "<li>{$items[$i]}</li>";
    $i++;
}

echo "<ul>{$li}</ul>*/
