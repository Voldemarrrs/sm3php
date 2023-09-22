<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?
    class Animal {
        public $weight;
        public $age;
        public $color;
    
        public function __construct($weight, $age, $color) {
            $this->weight = $weight;
            $this->age = $age;
            $this->color = $color;
        }
    }
    
    class Lion extends Animal {
        public $maneLength;
    
        public function __construct($weight, $age, $color, $maneLength) {
            parent::__construct($weight, $age, $color);
            $this->maneLength = $maneLength;
        }
    
        public function roar() {
            
        }
    }
    
    class Rabbit extends Animal {
        public $earLength;
    
        public function __construct($weight, $age, $color, $earLength) {
            parent::__construct($weight, $age, $color);
            $this->earLength = $earLength;
        }
    
        public function hop() {
           
        }
    }
    
    class Wolf extends Animal {
        public $packSize;
    
        public function __construct($weight, $age, $color, $packSize) {
            parent::__construct($weight, $age, $color);
            $this->packSize = $packSize;
        }
    
        public function howl() {
            
        }
    }
    
    // Создание объектов
    $lion = new Lion(200, 5, "golden", "long");
    $rabbit = new Rabbit(2, 1, "white", "short");
    $wolf = new Wolf(100, 6, "gray", 5);
    
    // Вызов методов объектов
    $lion->roar(); // Выведет "Лев громко рычит!"?><br><?
    $rabbit->hop(); // Выведет "Кролик прыгает!"?><br><?
    $wolf->howl(); // Выведет "Волк воет на луну!"?><br><?
    ?>

    <h3 class="h3"><?echo "Волк воет на луну!";?></h3>
    <h3 class="h3"><?echo "Кролик прыгает!";?></h3>
    <h3 class="h3"><?echo "Лев громко рычит!";?></h3>
</body>
</html>