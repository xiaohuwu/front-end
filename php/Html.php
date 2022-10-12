<?php
namespace Html;
class Table{
    public $title = "";
    public $numRows = 0;
    public function message(){
        echo "{$this -> title} have {$this -> numRows}";
    }
}