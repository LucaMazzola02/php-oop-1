<?php
class Movie {
    public $title;
    public $actor;
    public $year;
    
    function __construct(String $_title, String $_actor, Int $_year){
        $this->title = $_title;
        $this->actor = $_actor;
        $this->year = $_year;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getActor(){
        return $this->actor;
    }
    public function getYear(){
        return $this->year;
    }
}

$alien = new Movie('Alien', 'Bolaji Badejo', '1988');
$lucy = new Movie('Lucy', 'Scarlett Johansson', '2002');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>
<body>

<div>
    <p>
        <?php 
           echo $alien->getTitle(), "  --  ", $alien->getActor(), "  --  ", $alien->getYear();
        ?>
    </p>
    <p>
        <?php 
           echo $lucy->getTitle(), "  --  ", $lucy->getActor(), "  --  ", $lucy->getYear();
        ?>
    </p>
</div>
    
</body>
</html>
