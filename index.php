<?php
//function get()
/*function getLogSuboru(){
    date_default_timezone_set("CET");
    $time = date("h:i");
    echo "<br>";
    echo "teraz je:";
    echo $time;
    echo "<br>";
    
}
getLogSuboru();

$time = date("H:i"); */
    
    $time = date("H:i");
     $timeDate = date("d.m.Y"). date("H:i");

     function echo($subor){
        echo $subor;
     };

     function OpenSaveToFile($file, $content, $late) {
        $file = fopen($file, "r+");
        fwrite($subor, $prichody. $late .);
    };
    function Late($subor) {
        $prichody = file_get_contents($subor);

        $prichody1 = substr($prichody, 0, 2); 

        $prichody2 = substr($prichoy, 1, 1);

        if($prichody2 > 8) { 
            echo "neskoro kamosko " . date("H:i");
            OpenSaveToFile("log.txt", date("H:i"), 1);
        } else {
            echo "nacas, makaj" . date("H:i");
            OpenSaveToFile("log.txt", date("H:i"), 0);
        }
    };
Late("log.txt");

?>
