<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
  <style>
    body {
      padding: 50px 25%;
      background: #000;
      color: #fff;
      font-size: 1.5rem;
      font-family: Arial, Helvetica, sans-serif;
    }

    blockquote {
      font-style: italic;
    }
  </style>
</head>

<body>
  <?php
  $string = "Ezechiele 25.17: \"il cammino dell'uomo timorato è minacciato da ogni parte dalle iniquità degli esseri egoisti e dalla tirannia degli uomini malvagi. Benedetto sia colui che nel nome della carità e della buona volontà conduce i deboli attraverso la valle delle tenebre; perché egli è in verità il pastore di suo fratello e il ricercatore dei figli smarriti. E la mia giustizia calerà sopra di loro con grandissima vendetta e furiosissimo sdegno su coloro che si proveranno ad ammorbare ed infine a distruggere i miei fratelli. E tu saprai che il mio nome è quello del Signore quando farò calare la mia vendetta sopra di te.\" Ora, sono anni che dico questa cazzata, e se la sentivi significava che eri fatto. Non mi sono mai chiesto cosa volesse dire, pensavo che fosse una stronzata da dire a sangue freddo a un figlio di puttana prima di sparargli. Ma stamattina ho visto una cosa che mi ha fatto riflettere. Vedi, adesso penso, magari vuol dire che tu sei l'uomo malvagio e io sono l'uomo timorato, e il signor 9mm, qui, lui è il pastore che protegge il mio timorato sedere nella valle delle tenebre. O può voler dire che tu sei l'uomo timorato, e io sono il pastore, ed è il mondo ad essere malvagio ed egoista, forse. Questo mi piacerebbe. Ma questa cosa non è la verità. La verità è che TU sei il debole, e io sono la tirannia degli uomini malvagi. Ma ci sto provando, Ringo, ci sto provando, con grande fatica, a diventare il pastore.";
  $author = "- Jules Winnfield";
  $censored = "***";
  $filter = strtolower($_GET["censor"]);
  $string = str_replace($filter, $censored, $string);
  ?>  

  <blockquote>
    <?php echo $string ?>
  </blockquote>
  <?php echo $author ?>
  <br><br>
  Lunghezza citazione: <?php echo strlen($string) ?> caratteri
</body>

</html>