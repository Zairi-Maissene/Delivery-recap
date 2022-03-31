<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recap </title>
</head>
<body>
    <h1><?php 
    if(isset($_POST["checkbox"]))
    $ingredients=  $_POST["checkbox"];
    $prix= $_POST["nbSandwiches"]<10 ? $_POST["nbSandwiches"]*4:$_POST["nbSandwiches"]*4*0.9;
     echo "Commande par: ". htmlspecialchars( $_POST["nom"])." ". htmlspecialchars( $_POST["prenom"])."<br>".
     "nombre de sandwiches: ". htmlspecialchars( $_POST["nbSandwiches"])."<br>".
     "adresse : ". htmlspecialchars ($_POST["adresse"])."</br>".
     "Type de Sandwiche : ". htmlspecialchars( $_POST["typeSandwiche"])."<br>";
     if(!empty($ingredients))
     { echo "ingrédients : ";
      
      foreach($ingredients as $element)
      { echo htmlspecialchars($element) . " ";}}
      echo "<br> Prix Total: ".$prix;
      move_uploaded_file($_FILES["file"]["tmp_name"],"images/"."image".uniqid()); 
      ?>
     </h1>
    
</body>
</html>