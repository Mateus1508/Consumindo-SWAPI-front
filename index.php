<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
<!-- Fonts -->
    <link href="//db.onlinewebfonts.com/c/0c724f6aa457310440cf8949c615cbd7?family=Star+Jedi" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/39a2c7f346d5cfae7045aeb2fb50d9ad?family=LuloCleanW01-OneBold" rel="stylesheet" type="text/css"/>
</head>

<body>
<!-- title -->
    <h1 class="page-title">Star Wars</h1>
<!-- description -->
    <p>Information about the characters in the Star Wars</p>
   
    <div class="content">
        
 <?php  

//API data

 $url = "https://swapi.dev/api/people/";
 $result = json_decode(file_get_contents($url));

// Cards + API data

 foreach ($result->results as $personagem)  {
 echo " 
    <div class='card'>
        <h5 class='card-title'>$personagem->name</h5>
            <ul class='list-group'>
                <li class='list-item'>Height: $personagem->height cm </li>
                <li class='list-item'>Mass: $personagem->mass kg </li>
                <li class='list-item'>Hair color: $personagem->hair_color </li>
                <li class='list-item'>Skin color: $personagem->skin_color </li>
                <li class='list-item'>Eye color: $personagem->eye_color </li>
                <li class='list-item'>Birthday year: $personagem->birth_year </li>
                <li class='list-item'>Hair color: $personagem->hair_color </li>
  
";
//API insid API initial 
$url_planet = "$personagem->homeworld";
$result_planet = json_decode(file_get_contents($url_planet));
echo "
                <li class='list-item'> Homeworld: $result_planet->name </li>
            </ul>
    </div>
 

";
}
?>

</div>

</body>
</html>