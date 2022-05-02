<?php
    include_once 'user_session.php';

    $usserSession = new UserSession();
    $usserSession->closeSession();

    header("location: ../index.php");

?>