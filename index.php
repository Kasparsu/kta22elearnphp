<?php
$num = 10;
if($num > 10) {
    echo 'suurem';
} else if( $num < 10) {
    echo 'väiksem';
} else {
    echo 'võrdne';
}

switch($num) {
    case 1: 
        echo 'üks';
        break;
    case 2: 
        echo 'kaks';
        break;
    default:
        echo 'default';
        break;
}

for($i=0; $i<10; $i++) {
    echo "kordus $i\n";
}

while($num<10) {
    echo "while loop";
}

do {
    echo "do while";
} while($num<10);

/**
 * @param string $name Name of person who is to be greeted
 * @return string
 */
function hello(string $name):string {
    return "hello $name";
}

$text = hello('Kaspar');
echo $text;

function recursive($i){
    if($i>0){
        recursive($i-1);
    }
    echo $i;
}
recursive(10);
