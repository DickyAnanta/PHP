<?php

    $username="Admin";
    $password="qwerty";

    // Username Dan Password benar
    if ($username=="Admin" && $password=="qwerty") {
        echo "Username dan Password benar<br>";
    }else {
        echo "Username atau password salah<br>";
    }
    
    // Username Dan Password salah
    if ($username=="Admin" && $password=="") {
        echo "Username dan Password benar<br>";
    }elseif ($username=="quest") {
        echo "Anda Tamu";
    }
    else {
        echo "Username atau password salah<br>";
    }

    // Username benar
    if ($username=="Admin" && $password=="") {
        echo "Username dan Password benar<br>";
    }elseif ($username=="Admin") {
        echo "Anda Tamu";
    }
    else {
        echo "Username atau password salah<br>";
    }

?>