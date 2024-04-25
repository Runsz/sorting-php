<?php
    $arr = [2,5,1,4,7,3,6];
    $length = count($arr);

    echo 'Belum Diurutkan = ';
    for ($i=0; $i < $length; $i++) { 
        echo $arr[$i]." ";
    }
    echo '<br>';

    function insertion_Sort(&$arr)
    {
        $length = count($arr);
        for($i=0; $i < $length; $i++){
            $sementara = $arr[$i];
            $j = $i-1;
            while($j >= 0 && $arr[$j] > $sementara){
                $arr[$j+1] = $arr[$j];
                $j--;
            }
            $arr[$j+1] = $sementara;
        }
    }

    insertion_Sort($arr);

    echo 'Sudah Diurutkan = ';
    for ($i=0; $i < $length; $i++) { 
        echo $arr[$i]." ";
    }
?>