<?php
    session_start();
    include("config.php");
    $useremail = "";
    if (isset($_POST['subscribe'])) {
        $useremail = $_POST['email'];

        $query = mysqli_query($mysql,"INSERT INTO `subscribe` (`id`, `useremail`) VALUES (NULL, '$useremail')") ;

        if($query){
            $_SESSION['status'] = "Thanks for Subscribing";
            header('location: index.php');
        }
        else{
            echo "Something went wrong";
        }

    }
?>