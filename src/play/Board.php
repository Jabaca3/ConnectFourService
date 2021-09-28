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
    

}

