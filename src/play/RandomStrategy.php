
<?php
include 'MoveStrategy.php';

class RandomStrategy extends MoveStrategy{

    var $board;
    function __construct(Board $board){
        $this->board = $board;
    }

    //return random coordinates of empty position 
    public function pickSlot(Board $board){

        //Finding empty position on board
        $table1 = $board->table;
        $list= array();
        for($i=0; $i<count($table1); $i++){
            for($j=0; $j<count($table1[$i]); $j++){
                if($table1[$i][$j]==0){
                   array_push($list, [$i,$j]);
                }
            }
        }
        //Picking a random empty position
        $r = rand(0, count($list));
        $board->table[$list[$r][0]][$list[$r][1]] = 1;
        return $board;
    }
}

?>









