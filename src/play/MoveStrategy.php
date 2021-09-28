
<?php
abstract class MoveStrategy{
    
    var $board;
    function __construct(Board $board = null){
        $this->board = $board;
    }

    abstract function pickSlot(Board $board);

    function toJson($name){
        return array($name => get_class($this));
    }

    static function fromJson(){
        $strategy = new static();
        return $strategy;
    }
}
