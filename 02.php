<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>homework6</title>
</head>
<body>
<?php
    
    /*$boxes = array (
        'box1'=>'blue',
        'box2'=>'green',
        'box3'=>'black',
        );
    foreach ($boxes as $key => $v) {
        echo $key.":".$v;
        echo"<br/>";
    }*/
    /*function gitColor(){
        function color1{
            echo "<div style="background:".color.'red'></div>"
        }
    }
    gitColor();
    color();*/
    function getColor(){
        function color1(){
            echo "<div style='background:red;width:300px;height:300px;'></div>"; 
        }
        function color2(){
            echo "<div style='background:blue;width:300px;height:300px;'></div>";
        }
        function color3(){
            echo"<div style='background:black;width:300px;height:300px;'></div>";
        } 
}
    getColor();
    color1();
    color2();
    color3();
?>


</body>
</html>