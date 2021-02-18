<?php

class Language {
    
    // $type; 
    // syntax error, unexpected variable "$type", expecting "function" or "const" 

    public $type;

    public $name;

    function whichLanguage(){
        echo "This is " . $name . " Language";
    }
}

$languageClassInstance = new Language();

var_dump($languageClassInstance);
print_r($languageClassInstance);