<?php
class Movie {
    public $title;
    public $actor;
    public $year;
    
    function __construct(String $_title, String $_actor){
        $this->title = $_title;
        $this->actor = $_actor;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getActor(){
        return $this->actor;
    }
}

$alien = new Movie('Alien', 'Bolaji Badejo');
$lucy = new Movie('Lucy', 'Scarlett Johansson');

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
           echo $alien->getTitle(), "  --  ", $alien->getActor();
        ?>
    </p>
    <p>
        <?php 
           echo $lucy->getTitle(), "  --  ", $lucy->getActor();
        ?>
    </p>
</div>
    
</body>
</html>
