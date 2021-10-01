<?php
include 'RandomStrategy.php';
include 'Board.php';


$myBoard = new Board(6,7);
$myBoard->printBoard();
echo "\r\n";
echo "\r\n";
$strt = new RandomStrategy($myBoard);
playerMove();
$myBoard->printBoard();
echo "\r\n";
echo "\r\n";
$strt->pickSlot($myBoard);
$myBoard->printBoard();
echo "\r\n";
echo "\r\n";



function playerMove(){
    global $myBoard;

    while(true){
        $len = $myBoard->col-1;
        $input = readline("Enter Column between 0-$len \n");
        $input = intval($input);

        //Make sure input is valid
        if(strcmp($input, "exit") == 0){
            break;
        }
        if(strcmp(gettype($input), gettype(1))== 0 && $input < $myBoard->col){
            echo "Thank you";
            $r_column = $input;
            for($j=$myBoard->row-1; $j >= 0; $j--){
                if($myBoard->table[$j][$r_column] == 0){
                    $myBoard->table[$j][$r_column] =1;
                    break;
                }
            }
            break;
        }
        else{
            echo "Invalid..   ";
        }

    }

}