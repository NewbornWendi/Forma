<?php
require "functions.php";
require_once "data.php";

    $checkbox=$_POST['checkbox']??[];
    $name=$_POST['name']??"";
    $telephone=$_POST['telephone']??"";
    $email=$_POST['email']??"";
    $combobox=$_POST['combobox']??[];

if (isset($_POST['checkbox']) && isset($_POST['name']) && isset($_POST['telephone']) && isset($_POST['email']) && isset($_POST['combobox'])){

    $name1=name1($name);    
    $telephone1=telephone1($telephone);
    $email1=email1($email);

    $mas=[];
    if(count($mas)==0){        
        //csv
        csv($name,$telephone,$email,$combobox,$checkbox);
    
        //json
        json($name,$telephone,$email,$combobox,$checkbox);
    
        //txt
        txt($name,$telephone,$email,$combobox,$checkbox);
    }
}

require_once "index.view.php";

