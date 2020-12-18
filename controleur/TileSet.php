<?php

class TileSet{

    public $tiles=array(array());

    function __construct(String $strtiles)
    {   
        $tiles=explode(',',$strtiles);
		for ($i=0;$i<3;$i++){
            $slice=array_slice($tiles,$i*3,3);
            array_push($this->tiles,$slice);
        }
    }
    
    function move(String $dir){
        switch ($dir){
            case 'up':
                foreach ($this->tiles as $index=>$row){
                    if (isset($this->tiles[$index-1])){
                        $this->mergerows($this->tiles[$index-1],$this->tiles[$index]);
                    }
                }
            case 'down':
                foreach ($this->tiles as $index=>$row){
                    if (isset($this->tiles[$index+1])){
                        $this->mergerows($this->tiles[$index+1],$this->tiles[$index]);
                    }
                }
            case 'left':
                foreach ($this->tiles as $index=>$row){
                    if (isset($this->tiles[$index-1])){
                        $this->mergerows($this->tiles[$index-1],$this->tiles[$index]);
                    }
                }
            case 'right':

        }
    }

    function mergerows(array &$row1,array &$row2){
        if (count($row1)!=count($row2)){
            throw new Exception('params 1 and 2 must be same-sized arrays.');
        }
        for ($i=0;$i<3;$i++){
            if ($row1[$i]==$row2[$i]){
                $row1[$i]*=2;
                $row2[$i]=0;
            }
        }
    }
}
?>