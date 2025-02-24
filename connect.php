<?php 

    $connect = mysqli_connect('localhost', 'root', '', 'fah_project');
    if(mysqli_error($connect)) {
        echo 'failed to connect!'; 
    }
?>