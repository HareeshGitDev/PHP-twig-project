<?php

require 'vendor/autoload.php';

$loader=new  \Twig\Loader\FilesystemLoader('vendor\admin-db');
$twig= new \Twig\Environment($loader);

// Read summary jsons file
$jsonFile = 'vendor\admin-db\jsons\summary.json'; 
$jsonData = file_get_contents($jsonFile);
$jsonArray = json_decode($jsonData, true);
$data['w1']=$jsonArray;

// Read project_progress jsons file
$jsonFile = 'vendor\admin-db\jsons\Project_Progress_Summary.json'; 
$jsonData = file_get_contents($jsonFile);
$jsonArray = json_decode($jsonData, true);
$data['w2']=$jsonArray;

// Read whats_news jsons file
$jsonFile = 'vendor\admin-db\jsons\Whats_New.json'; 
$jsonData = file_get_contents($jsonFile);
$jsonArray = json_decode($jsonData, true);
$data['w3']=$jsonArray;

// Read last_activity jsons file
$jsonFile = 'vendor\admin-db\jsons\Latest_Activity.json'; 
$jsonData = file_get_contents($jsonFile);
$jsonArray = json_decode($jsonData, true);
$data['w4']=$jsonArray;

// Read new_Products jsons file
$jsonFile = 'vendor\admin-db\jsons\New_Products.json'; 
$jsonData = file_get_contents($jsonFile);
$jsonArray = json_decode($jsonData, true);
$data['w5']=$jsonArray;

echo $twig->render('template.html',['data' => $data]);