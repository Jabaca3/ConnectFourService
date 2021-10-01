<?php

class Board{

    public $table;
    public $row;
    public $col;

    function __construct($row, $col){
        $this->row = $row;
        $this->col = $col;
        $this->table = array_fill(0,$row, array_fill(0, $col, 0));
    }
    
    function printBoard(){
        $table = $this->table;
        for($i=0; $i<count($table); $i++){
            echo "\r\n";
            for($j=0; $j<count($table[$i]); $j++){
                echo " ", $table[$i][$j];
            }
        }
    }

}

