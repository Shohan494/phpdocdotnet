<?php

class Language {
    
    // $type; 
    // syntax error, unexpected variable "$type", expecting "function" or "const" 

    public $type;

    public $name;

    function whichLanguageWrong(){
        echo "This is " . $name . " Language";
    }

    function whichLanguageRight(){
        //echo "This is " . $this->name . " Language";

        var_dump($this);
        // $this POINTS TO THE CLASS OBJECT

        // TO MAKE THIS RIGHT, WE HAVE TO USE $this
        // self is used to access static or class variables or methods and this is used to access non-static or object variables or methods.
    }
}

$languageClassInstance = new Language();

var_dump($languageClassInstance);
print_r($languageClassInstance);

// $languageClassInstance->whichLanguage;
// Warning: Undefined property: Language::$whichLanguage in C:\laragon\www\2021\phpdocnet\languageClass.php on line 22

// $languageClassInstance->whichLanguageWrong();
// Warning: Undefined variable $name in C:\laragon\www\2021\phpdocnet\languageClass.php on line 13

$languageClassInstance->whichLanguageRight();
// Warning: Undefined variable $name in C:\laragon\www\2021\phpdocnet\languageClass.php on line 13