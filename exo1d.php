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
    pre{border: 3px solid lightgray;box-sizing: border-box;border-radius: 6px 5px 8px 5px;width: 24%;}
</style>
<body>
<?php
    require 'exo1class.php';
         $user = new User();
         $user->afficheUser();
?>
<div class="div">
    <pre style="color:green" >
    
     require 'exo1class.php';
     $user = new User();
     $user->afficheUser();
    
    


   class User {
    private $nom;
    private $prenom;

    public function afficheUser(){
        echo"je suis un User";
    }
   }

    </pre>
</div>
</body>
</html>