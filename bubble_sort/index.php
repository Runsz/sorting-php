<?php 
    $arr = [
        ['id'=>1],
        ['id'=>7],
        ['id'=>3],
        ['id'=>2],
        ['id'=>5],
        ['id'=>6],
        ['id'=>4],
    ];
    $length = count($arr);

    echo 'Belum diurutkan = ';
    for ($i=0; $i < $length; $i++) { 
        echo $arr[$i]['id']." ";
    }
    echo '<br>';

    function bubbleSort(&$arr){
        $length = count($arr);
        for ($i=0; $i < $length; $i++) { 
            $swap = false;
            for ($j=0; $j < $length - $i - 1; $j++) { 
                if ($arr[$j]['id'] > $arr[$j+1]['id']) {
                    $sementara = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $sementara;
                    $swap = True;
                }
            }
            if ($swap == false) {
                break;
            }
        }
    }

    bubbleSort($arr);

    echo 'Sudah diurutkan = ';
    for ($i=0; $i < $length; $i++) { 
        echo $arr[$i]['id']." ";
    }

    //var_dump($arr);
?>