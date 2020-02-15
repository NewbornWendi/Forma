<?php
function name1($name){
    $s="";
    $name_proverka='/^[A-ЩЭ-Я][a-яё]{1,30}$/u';
    if (preg_match( $name_proverka, $name)){
        $s="<span style='color:green;'>Верно</span>";
    }
    else{
        $s="<span style='color:red;'>Неверно</span>";
    }
    return $s;
}


function telephone1($telephone){
    $s="";
    $telephone_proverka='/^\((8|\+7)\)[ -]\d{3}[ -][0-9]{3}[ -]\d{2}[ -]\d{2}$/';
    if (preg_match($telephone_proverka, $telephone)){
        $s="<span style='color:green;'>Верно</span>";
    }
    else{
        $s="<span style='color:red;'>Неверно</span>";
    }
    return $s;
}



function email1($email){
    $s="";
    $email_proverka="/^[0-9a-z_]+@[a-z]{2,6}+\.[a-z]{2,3}$/";
    if (preg_match($email_proverka, $email)){
        $s="<span style='color:green;'>Верно</span>";
    }
    else{
        $s="<span style='color:red;'>Неверно</span>";
    }
    return $s;
}



//                  Лабуда с кнопками

// csv
function csv($name,$telephone,$email,$combobox,$checkbox){
    $FileCsv = fopen('../file/file.csv','w+');
    $qwerty=[$name,$telephone,$email,implode('; ',$combobox), implode('; ',$checkbox)];
    fputcsv($FileCsv, $qwerty, '; ');   
    fclose($FileCsv);
}

function tableCsv(){
    $FileRead = fopen('../file/file.csv','r');
    while(($FileCsv = fgetcsv($FileRead, 1000, "; ")) !== FALSE){
               
        foreach($FileCsv as $asdfg){
            
            echo "<td>$asdfg</td>";
        }
    }
    fclose($FileRead);
}
// csv

// json
function json($name,$telephone,$email,$combobox,$checkbox){
    $FileJson = file_get_contents('../file/file.json');
    $ListJson = json_decode($FileJson,TRUE);
    unset($FileJson);
    $ListJson = [
        "name"=>$name,
        "telephone"=>$telephone,
        "email"=>$email,
        "genre"=>implode('; ',$combobox),
        "list"=>implode('; ',$checkbox),
    ];
        
    file_put_contents('../file/file.json',json_encode($ListJson, JSON_UNESCAPED_UNICODE));
    unset($ListJson);
}
// json

// txt
function txt($name,$telephone,$email,$combobox,$checkbox){
    $FileTxt = fopen('../file/file.txt','w+');
    $zxcvb=[$name,$telephone,$email,implode(', ',$combobox), implode(', ',$checkbox)];
    foreach($zxcvb as $zxcvb1){
        fputs($FileTxt,$zxcvb1.'; ');
    }
    fclose($FileTxt);
}
// txt

//                  Лабуда с кнопками