<?php
$nohp = "08562121141";
    // kadang ada penulisan no hp 0811 239 345


    // cek apakah no hp mengandung karakter + dan 0-9
    if(!preg_match('/[^+0-9{8,15}]/',trim($nohp))){
        // cek apakah no hp karakter 1-3 adalah +62
        if(substr(trim($nohp), 0, 3)=='+62'){
            $hp = trim($nohp);
        }
        // cek apakah no hp karakter 1 adalah 0
        else {
            echo "format salah";
        }
    } else {
        echo "apabae";
    }
    print $hp;
?>