<?php

class TileSet{

    private $tiles=array(array());

    function __construct(String $strtiles){
        $tiles=split($strtiles,',');
		for ($i=0;$i<3;$i++){
            array_push($this->tiles[$i],array_slice($tiles,$i*3,3));
        }
    }
    
    function move(String $dir){
        switch ($dir){
            case 'up':
                foreach ($this->tiles as $index=>$row){
                    if isset($this->tiles)
                }
            case 'down':
                
            case 'left':

            case 'right':

        }
    }
}
?>