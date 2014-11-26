<?php
header("Content-Type: application/javascript");

    chdir("../");    
    
    $table = "records";
    $id = "students.php";
    $connect = true;
    include "r_main.php";
    
    $connection->printQueryResults("SELECT * FROM records", true);
    
    
    /*
     * 
    header("Content-Type:application/javascript");
    $people = [
    "response" => "SUCCESS",
    "data" => [

    "message" => [
    ["code"=>"11006000", "name"=>"KAMAU IAN MBAE", "identification"=>"SKAMIA1321", "balance"=>"0"],
    ["code"=>"11652000", "name"=>"MWARO JOB MUIRURI", "identification"=>"SMWAJO0901", "balance"=>"0"],
    //["code"=>"", "name"=>"", "identification"=>"", "balance"=>""]
    ],
    "code" => ""
    ],
    ];

    echo "(".json_encode($people).")";
    exit;
     * 
     * */


?>
