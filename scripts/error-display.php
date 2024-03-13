<?php

function echoError($message, $jsFile, $cssFile){
    require_once("../app_config.php");
    require_once(APP_ROOT . APP_FOLDER_NAME . "/scripts/echoHTML.php");
    
    echoHead($jsFile, $cssFile);
    echoHeader("Error Message");
    echo "<h3> $message </h3>";
    echoFooter();

    exit();
};

// test