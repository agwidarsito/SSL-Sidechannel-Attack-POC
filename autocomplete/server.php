<?php

$countries = explode("\n", file_get_contents("data.txt"));

$results = [];
if (isset($_GET["keyword"])){
    foreach($countries as $aCountry){
        if (FALSE !== strpos(strtolower($aCountry), strtolower($_GET["keyword"]))){
            $results[] = $aCountry;
        }
    }
}

var_dump($results);

