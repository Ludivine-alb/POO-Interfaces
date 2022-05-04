
<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'heavyTruck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'LightableInterface.php';

$plopinette = new Car ('Cherry', 7, 'peanut-butter');
$dreamCar = new Car ('Plop', 10, 'croquette');
$dreamCar->setCurrentSpeed(40);
 echo $dreamCar->switchOn(true);
var_dump($dreamCar);

$plopinette->setParkBrake(true);
var_dump($plopinette);

try {
    $plopinette->start();
} catch(Exception $e) {
  echo 'Exception received : ' . $e->getMessage(). PHP_EOL;
  $plopinette->setParkBrake(false);
} finally {
    echo 'Ma voiture roule comme un piti donut' . PHP_EOL;
}


 $bicycle = new Bicycle('Red', 3);

 $skateboard = new Skateboard('grey',0);


// $tesla = new Car('black', 4, 'fuel', 3);
// $ferrari = new Car('red', 2, 'water', 6);
// $schoolBus = new heavyTruck('yellow', 40, 'bubbles', 7);


// $firstTruck = new heavyTruck('purple', 4, 'fuel', 100);
// $secondTruck = new heavyTruck('blue', 3, 'hydrogen', 75);
// $thirdTruck = new heavyTruck('red', 2, 'electric', 55);

// $harley = new MotorWay();
// echo $harley->addVehicle($bicycle);
// echo $harley->addVehicle($skateboard);
// $harley->addVehicle($tesla);
// $harley->addVehicle($ferrari);
// var_dump($harley);

// $pedestrianWay = new PedestrianWay();
// echo $pedestrianWay->addVehicle($tesla);
// echo $pedestrianWay->addVehicle($schoolBus);
// echo $pedestrianWay->addVehicle($firstTruck);
// $pedestrianWay->addVehicle($bicycle);
// $pedestrianWay->addVehicle($skateboard);
// var_dump($pedestrianWay);

// $residentialWay = new ResidentialWay();
// $residentialWay->addVehicle($tesla);
// $residentialWay->addVehicle($ferrari);
// $residentialWay->addVehicle($schoolBus);
// $residentialWay->addVehicle($bicycle);
// $residentialWay->addVehicle($skateboard);
// var_dump($residentialWay);

// /*echo $firstTruck->getStorageCapacity() . PHP_EOL;
// echo $firstTruck->getInitialStorage() . PHP_EOL;
// echo $firstTruck->isFilled() . PHP_EOL;
// echo $firstTruck->fill() . PHP_EOL;
// echo $firstTruck->isFilled() . PHP_EOL;


// echo $thirdTruck->getStorageCapacity() . PHP_EOL;
// echo $thirdTruck->getInitialStorage() . PHP_EOL;
// echo $thirdTruck->isFilled() . PHP_EOL;
// echo $thirdTruck->fill() . PHP_EOL;
// echo $thirdTruck->isFilled() . PHP_EOL;*/

// /*var_dump(Car::ALLOWED_ENERGIES);

// $bicycle = new Bicycle('green', 1);

// echo $bicycle->forward();

// var_dump($bicycle);

// $car = new Car('Yellow', 4, 'diesel');

// echo $car->forward();

// var_dump($car);

// // Instanciation d'un nouvel objet classe Car $deLorean
// $deLorean = new Car('grey', 4, 'fuel');

// var_dump($deLorean);

// if (isset($deLorean->nbWheels)) {
//     echo $deLorean->getNbWheels();
// }

// echo $deLorean->start();
// echo $deLorean->forward();
// var_dump($deLorean);
// echo $deLorean->brake();
// var_dump($deLorean);

// // Instanciation d'un nouvel objet classe Car $twingo
// $twingo = new Car('pink', 4, 'electric');

// // Instanciation d'un nouvel objet $bike

// $bike = new Bicycle('black', 2);

// var_dump($bike);

// $bike->setCurrentSpeed(0);

// var_dump($bike);

// // Moving bike

// echo $bike->forward();

// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

// echo $bike->brake();

// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';

// echo $bike->brake();

// var_dump($bike);

// // Instanciation d'un nouvel objet $rockrider

// $rockrider = new Bicycle('yellow', 2);
// $rockrider->getNbWheel();

// // Instanciation d'un nouvel objet $tornado

// $tornado = new Bicycle('black', 2);

// $tornado->forward();

// //Instanciation nouveaux vehicules again

// */
// ?>