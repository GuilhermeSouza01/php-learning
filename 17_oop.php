<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/


// Define a object

Class User {
  // Propeties are attributes that belong to a class

  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes

  public $name;
  public $email;
  public $password;

   // The constructor is called whenever an object is created from the class.
  // We pass in properties to the constructor from the outside.
  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Methods are functions that belong to a class.
  //  public function set_name($name) {
  //   $this->name = $name;
  //  }

   public function get_name() {
    return $this->name;
   }
}

// Instantiate a user object

$user1 = new User("Guilherme", "gui@email.com", "password");

$user1->get_name();

var_dump($user1);

/* ----------- Inheritance ---------- */

/*
  Inheritance is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

class Employee extends User {
  public function __construct($name, $email, $password, $title)
  { 
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title() {
    return $this->title;
  }
}


$employee1 = new Employee("Guilherme", "gui@email.com", "3443", "Dev React");

echo $employee1->get_title();