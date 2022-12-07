<html>
<body>

<h2> My First PHP Webpage </h2>

<?php


    //echo "Hello World how fast does this update?";
   // $str = 'Hello & Welcome to mylocalserverwebpage';
    //$num = 8.8;
    $brands = array("HP","Lenovo","Asus","dell");

    echo var_dump($brands); echo ".\n";
    //echo "<h1>" . $str . $num . "<h1>";

    class Car {
        public function __construct($brand, $year) {
            $this->brand = $brand;
            $this->year = $year;
        }
    
        public function print_details() {
            echo "This car is a " . $this->year . " " . $this->brand . ".\n";
        }
    }
    
    $car = new Car("Toyota", 2006);
    $car->print_details();
?>

</body>
</html>