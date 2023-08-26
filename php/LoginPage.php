<?php
    // $userNameCredentials as map where key will be userName and value will be list of password, security question answer in .txt file
    $userName = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $type = $_REQUEST['actionType']
    if($type == "forgot_password_action"){
        if(isUserNameValid($userName)){
            $file = fopen("data.txt", "r");
            echo $file;
        }
        else{
            header("Location ../Html/ForgotPassword.html");
        }
    }else if($type == "login_action"){
        if(strlen($userName) == 0){
    
        }
        else if(strlen($password) == 0){
    
        }
        else if(isUserNameValid($userName)){
    
        }
        else if(isPasswordValid($userName, $password)){
        
        }
        else{
            // Wrong userName
    
        }
    }
    else{
        //throw an exception
    }
    function isUserNameValid($userName) : boolean {
        
    }
    
    function isPasswordValid($userName) : boolean {
        
    }
?>