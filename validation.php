<?php
function LoginUser($UserName ,$UserPassword){
    if(ValidUserName($UserName)){
        echo "Failed User Name";
    }
    elseif(ValidUserPassword($UserPassword)){
         echo "Failed User Password";
    }
    elseif (!matching($UserName ,$UserPassword)){
        echo "Not Matching User Name Or Password";
    }
    else 
    {
        Login();
    }
}

function ValidUserName($UserName){
    if(empty($UserName)){
        return true;
    }
    else{
        return false;
    }
}

function ValidUserPassword($UserPassword){
     if(empty($UserPassword)){
        return true;
     }
     else
     {
        return false;
     }
}

function matching($UserName, $UserPassword){
    if($UserName == "abc" && $UserPassword = "123"){
        return true;
    }
    else{
        return false;
    }
}

function Login(){
    echo "Login Successful";
}
LoginUser("abc","123");