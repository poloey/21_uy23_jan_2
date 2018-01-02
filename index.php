<?php 
class Person {
  public $first_name;
  public $last_name;
  public function fullName () {
    return $this->first_name . ' ' . $this->last_name;
  }
  public static $city = 'feni';
  const CITY = 'feni2';
}
$arafat = new Person;
$arafat->first_name = 'arafat';
$arafat->last_name = 'rahaman';
echo Person::CITY;
echo Person::$city;


