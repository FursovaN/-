<?php
class Animal {
    protected $name;
    protected $age;
    protected $color;

    public function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function eat() {
        echo $this->name . " кушает 🍽️<br>";
    }

    public function sleep() {
        echo $this->name . " спит... 💤<br>";
    }

    public function showInfo() {
        echo "Имя: " . $this->name . "<br>";
        echo "Возраст: " . $this->age . " лет<br>";
        echo "Цвет: " . $this->color . "<br>";
    }

    public function makeSound() {
        echo $this->name . " издает звук...<br>";
    }
}

class Dog extends Animal {
    private $breed;

    public function __construct($name, $age, $color, $breed) {
        parent::__construct($name, $age, $color);
        $this->breed = $breed;

        echo "🐶 В зоопарке появилась собака: $name!<br>";
    }

    public function getBreed() {
        return $this->breed;
    }

    public function makeSound() {
        echo $this->name . " говорит: Гав-гав! 🐕<br>";
    }

    public function fetch() {
        echo $this->name . " приносит мячик! 🎾<br>";
    }

    public function showInfo() {
        parent::showInfo();
        echo "Порода: " . $this->breed . "<br>";
    }
}

class Cat extends Animal {
    private $lives = 9;

    public function __construct($name, $age, $color) {
        parent::__construct($name, $age, $color);
        echo "🐱 В зоопарке появилась кошка: $name!<br>";
    }

    public function makeSound() {
        echo $this->name . " говорит: Мяу-мяу! 🐱<br>";
    }

    public function scratch() {
        echo $this->name . " царапает диван! 😾<br>";
    }

    public function loseLife() {
        if ($this->lives > 0) {
            $this->lives--;
            echo $this->name . " потеряла жизнь. Осталось: $this->lives<br>";
        } else {
            echo $this->name . " больше не может терять жизни!<br>";
        }
    }
}

class Bird extends Animal {
    private $canFly;

    public function __construct($name, $age, $color, $canFly = true) {
        parent::__construct($name, $age, $color);
        $this->canFly = $canFly;
        echo "🐦 В зоопарке появилась птица: $name!<br>";
    }

    public function makeSound() {
        echo $this->name . " поет: Чик-чирик! 🐦<br>";
    }

    public function fly() {
        if ($this->canFly) {
            echo $this->name . " летает высоко в небе! ☁️<br>";
        } else {
            echo $this->name . " не умеет летать... 🐧<br>";
        }
    }
}

class Fish extends Animal {
    private $depth;

    public function __construct($name, $age, $color, $depth) {
        parent::__construct($name, $age, $color);
        $this->depth = $depth;
        echo "🐟 В зоопарке появилась рыбка: $name!<br>";
    }

    public function swim() {
        echo $this->name . " плавает на глубине " . $this->depth . " метров 🐟<br>";
    }

    public function makeSound() {
        echo $this->name . " молчит... пузыри 🫧<br>";
    }

    public function showInfo() {
        parent::showInfo();
        echo "Глубина: " . $this->depth . " м<br>";
    }
}