<?php 

class Person {
  const CITY = 'Feni';
  public static $division = 'Chittagong';
  public $first_name;
  public $last_name;
  public $email;
  public function fullName () {
    return "{$this->first_name} {$this->last_name}'s mobile phone";
  }
}
echo Person::$division;

// $arafat->first_name = 'Arafat';
// $arafat->last_name = 'Ahmed';
// $arafat->college = 'fgc';
// $arafat->email = 'arafat@gmail.com';

// print_r($arafat);
// echo $arafat->fullName();


