<?php
    class Person{
        /*
            public - access from anywhere outside class
            private -  only access in this class
            protect only this class and any class that extends it
        */
        private $name ;
        private $email ;

        //Constructor instantiates when class is called
        public function __construct($name, $email){
            echo __CLASS__.' created<br>';
            $this->name = $name;
            $this->email = $email;

        }
        //deconstruct
        /*public function __destruct(){
            echo __CLASS__.' destroyed<br>';
        }*/
        /*setter
        public function setName($name){
            $this->name = $name;
        }
        public function setemail($email){
            $this->email = $email;
        }*/
        //getter
        public function getName(){
            return $this->name.'<br>';
        }
        public function getemail(){
            return $this->email. '<br>';
        }
    }

    $person1 = new Person('Jogn Does', 'test@test.com');

    //$person1->setName('John Doe');
    echo $person1->getName();

    class Customer extends Person{
        private $balance;
        public static $ageLimit = 40;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'a new customer has been created: '. __CLASS__.'<br>' ;
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }
        public function getBalance(){
            return $this->balance;
        }
        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    //Access public static method without instantiate // static props and method
    echo Customer::getAgeLimit().'<br>';
    $customer1= new Customer ('John Doe', 'tester@email.com', 300);
    echo $customer1 -> getBalance()
?>