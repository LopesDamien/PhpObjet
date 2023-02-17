<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .div{padding-left: 43%;}
    strong{color:blue;}
    pre{border: 3px solid lightgray;box-sizing: border-box;border-radius: 6px 5px 8px 5px;width: 35%;}
</style>
<body>
    <?php
        class Personnage {
    public $Pseudo;
    public $Vie;
    
    public function __construct($pseudo) {
        $this->Pseudo = $pseudo;
        $this->Vie = 100;
    }
    
    public function afficherInfo() {
        echo "Le personnage ".$this->Pseudo." a ".$this->Vie." points de vie.";
    }
}
    ?>
<div class="div">
    <pre style="color:green" >

        class Personnage {
            public $pseudo;
            public $vie;
            
            public function __construct() {
                $this->Vie = 100;
            }
        }
     
    </pre>
</div>
    
</body>
</html>
