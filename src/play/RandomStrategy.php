
<?php
include 'MoveStrategy.php';

class RandomStrategy extends MoveStrategy{

    var $board;
    function __construct(Board $board){
        $this->board = $board;
    }

    //return random coordinates of empty position 
    public function pickSlot(Board $board){

        // Making list of empty columns at top row
        $table1 = $board->table;
        $list= array();
        for($i=0; $i<=count($table1); $i++){
            if($table1[0][$i] == 0){
                array_push($list, $i);
                }
            }
        // Picking a random empty slot from $list
        $r_column = $list[rand(0, count($list)-1)];

        // Selecting proper row and breaking
        for($j=$board->row-1; $j >= 0; $j--){
            if($table1[$j][$r_column] == 0){
                $board->table[$j][$r_column] =2;
                break;
            }
        }
        return $board;
    }
}

?>









