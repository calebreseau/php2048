<?php

define('DOWN',1);
define('RIGHT',2);
define('UP',3);

class TileSet{

    private $angle;

    function __construct($tiles){
        $this->angle=0;
        $this->tiles=explode(',',$tiles);
    }

    function rotate(){
        for ($k=0;$k<$this->angle;$k++){
            $rtiles=array_fill(0,16,0);
            for ($i=0;$i<4;$i++){
                for ($j=0;$j<4;$j++){
                    $rtiles[$j*4+3-$i]=$this->tiles[$i*4+$j];
                }
            }
            $this->tiles=$rtiles;
        }
    }

    function move($dir){
        $this->angle=$dir;
        $this->rotate($this->angle);
        return;
        for ($l=0;$l<4;$l++){
            for($c=1;$c<4;$c++){
                if ($this->tiles[$l*4+$c]==$this->tiles[$l*4+$c-1]){
                    $this->tiles[$l*4+$c-1]*=2;
                    $this->tiles[$l*4+$c]*=0;
                }
                if ($this->tiles[$l*4+$c-1]==0){
                    for ($k=0;$k<=2-$c;$k++){
                        $this->tiles[$l*4+$c+$k]=$this->tiles[$l*4+$c+$k+1];
                    }
                    $this->tiles[$l*4+3]=0;
                    for ($i=0;$i<4-$c;$i++){
                        if ($this->tiles[$l*4+$c+$i]!=0){
                            $c--;
                            break;
                        }
                    }
                }
                
            }
        }
    }

    function restore(){
        $this->move(4-$this->angle);
        $this->angle=0;
    }

    function display(){
        foreach ($this->tiles as $i=>$tile){
            echo($tile.' ');
            if ($i%4==3) echo('<br>');
        }
        echo('<br><br>');
    }
}
?>