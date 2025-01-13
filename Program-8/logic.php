<?php
    if($_REQUEST){
        if(!isset($_COOKIE['user'])){
            echo "Cookies is not Set: " . time();
            setcookie("user", "abc@example.com", time() + 20, "/"); // 86400 = 1 day

        }else{
            echo "Cookie is now Set : " . time(); 
        }
    }else{
        header("Location:http://localhost/laravel-tutorials/Program-7/");
    }
?>