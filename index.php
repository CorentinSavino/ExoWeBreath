<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <p>Bienvenue sur l'exercice des modules interactif par Corentin Savino</p>
    <p>nous somme le <span id="date"></span></p>
    <p>à <span id="hour"></span></p>

<!-- sending the current tim of the day to have an always upto date dashboard -->


     <form action="./controller/Router.php?action=dashboard" method="post">
     <input type="hidden" name="time" id="inputTime">
    <input type="hidden" name="date" id="inputDate">
    <input type="submit" value="allez">
     </form>


        
    <script src="index.js"></script>
</body>
</html>