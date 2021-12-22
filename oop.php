<?php

class Person {
    // public $name = 'Nack Thanapon';
    // public $age = 20;
    // public $gender = 'M';
    public $name;
    public $age;
    public $gender ;
    public function walk() {
        echo "{$this->name} => กำลังเดิน <br>"; //การเข้าถึง property ใช้ $this->
    }
    public function talk(){
        echo "{$this->name} => กำลังพูดอยู่ <br>";
    }
    // public function info(){
    //     return "{$this->name} {$this->age}";
    // }
}

class Child extends Person{
    public function __construct($name = null,$age = null,$gender = null){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function callName(){
        echo "ชื่อ: {$this->name} <br>"; 
    } 
    public function callAge(){
        echo "อายุ : {$this->age} <br>";
    }
    public function callGender(){
        echo "เพศ : {$this->gender} <br>";
    }
    public function callInfo(){
        $this->callName();
        $this->callAge();
        $this->callGender();
        $this->walk();
        $this->talk();
    }
}

// $person = new Person;
// echo $person->name;
// $person->walk();
// echo $person->name;
// echo $person->info();
$child = new Child('Nack', 8, 'Male');
// $child->callName();
// $child->callAge();
// $child->callGender();
$child->callInfo();
echo "------------------<br>";

$child2 = new Child('Pim', 20, 'Female');
$child2->callInfo();