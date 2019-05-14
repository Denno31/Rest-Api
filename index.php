<?php 
class Person {
    private $race;
    private $nationality;
    public $name;
    private $age;

    function __construct($race, $nationality, $name, $age){
        $this->race = $race;
        $this->nationality = $nationality;
        $this->name = $name;
        $this->age = $age;
    }
    static function getDocumentRoot(){
        return $_SERVER['DOCUMENT_ROOT'];
    }
}

$messi = new Person('white','Argentinian', 'Messi', 30);
echo $messi->name;
print_r(Person::getDocumentRoot());