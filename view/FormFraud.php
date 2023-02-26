<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controller/Router.php?action=createFraud" method="post">

    <label for="passenger">nombre de passagers comptés</label>
    <input type="number" name="passenger" id="passnger">
    
    <label for="registered">nombre d'abonnements validés</label>
    <input type="number" name="registered" id="registered">

    <label for="time">heure</label>
    <input type="time" name="time" id="time">

    <label for="date">date</label>
    <input type="date" name="date" id="date">

    <label for="line">nom de la ligne</label>
    <input type="text" name="line" id="line">

    <input type="submit" value="Envoyer">

    </form>
</body>
</html>