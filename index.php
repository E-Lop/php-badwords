<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Redacted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

    <?php
    $longText = "Tre Anelli ai Re degli Elfi sotto il cielo che risplende,
    Sette ai Principi dei Nani nelle loro rocche di pietra,
    Nove agli Uomini Mortali che la triste morte attende,
    Uno per l'Oscuro Sire chiuso nella reggia tetra,<br>
    Nella Terra di Mordor, dove l'Ombra nera scende.<br>
    Un Anello per domarli, un Anello per trovarli,<br>
    Un Anello per ghermirli e nel buio incatenarli,<br>
    Nella Terra di Mordor, dove l'Ombra cupa scende.";
    $textLegth = strlen($longText);
    $redactedText = str_replace("Anello", "***", $longText);
    $redactedTextLegth = strlen($redactedText);
    // $redacted = $_GET["name"];
    ?>

    <!-- stampa del paragrafo originale con conteggio parole -->
    <h2>Testo originale:</h2>
    <div>Lunghezza paragrafo: <?php echo $textLegth ?> caratteri</div>
    <p><?php echo $longText ?></p>

    

    <!-- stampa del paragrafo modificato con conteggio parole -->
    <h2>Testo modificato:</h2>
    <div>Lunghezza paragrafo: <?php echo $redactedTextLegth ?> caratteri</div>
    <p><?php echo $redactedText ?></p>
</body>
</html>