<?php
    // class Test {
    //     public function __construct()
    //     {
    //         echo "Constructor"."<br>";
    //     }
    //     public function show ()
    //     {
    //         echo "Hello World";
    //     }
    //     public function greatings ()
    //     {
    //         echo "Good Eevning"."<br>";
    //     }
    //     public function __destruct()
    //     {
    //         echo "Destructor";
    //     }
    // }

    // $objectTest = new Test();

    // $objectTest->show ();
    // echo "<br>";
    // $objectTest->greatings ();


    class Parents {
        public function flat()
        {
            echo "2BHK Flat <br>";
        }
        public function car()
        {
            echo "Laxary LT58 <br>";
        }
        protected function bankaccount()
        {
            echo "Account Details: 6244332580 Nahid3";
        }

        private function accessAccount()
        {
            $this->bankaccount();
        }
    }

    class Child extends Parents {

        public function accessParentAccount()
        {
            $this->bankaccount();
        }
        public function bike()
        {
            echo "Royel Enfild <br>";
        }
    }


    $objectParents = new Parents();
    $objectParents->car();

    $objectchild = new Child();
    $objectchild->bike();
    $objectchild->car();
    $objectchild->flat();
    $objectchild->accessParentAccount();
?>