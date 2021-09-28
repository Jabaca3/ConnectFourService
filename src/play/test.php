<?php
include 'RandomStrategy.php';
include 'Board.php';


$myBoard = new Board(6,7);
echo "Random empty Board";
printBoard($myBoard->table);

echo "\r\n";
echo "\r\n";

$strt = new RandomStrategy($myBoard);
$strt->pickSlot($myBoard);
echo "Random Slot";
printBoard($myBoard->table);

function printBoard($arr){
    for($i=0; $i<count($arr); $i++){
        echo "\r\n";
        for($j=0; $j<count($arr[$i]); $j++){
            echo " ", $arr[$i][$j];
        }
    }
}