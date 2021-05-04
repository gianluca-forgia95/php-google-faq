<?php 
 $Faq = [
    [
     'question' => 'Come state implementando la recente decisione della Corte Europea?',

     'answer' => 'La recente decisione della Corte di giustizia dell Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.',
    ],
    [
     'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',

     'answer' => 'Siamo costantemente al lavoro per garantire un elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.',
    ],
    [
     'question' => 'Perché il mio account è associato a un paese?',

      'answer' => 'Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell ultimo anno.
      I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un anno per aggiornare l associazione del paese.',
    ]
 ];

// foreach ( $Faq as $text ) {
//    echo $text['question'] . '<br>' . $text['answer'] . '<br>';
// }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /CSS -->
    <title>Google Faq</title>
</head>
<body>
 <div class="container">
  <ul>

   <?php foreach ($Faq as $text) { ?>
     <li>
       <h3> <?php echo $text['question'] ?></h3>
       <p> <?php echo $text['answer'] ?></p>
     </li>
   <?php } ?>

  </ul>
  
 </div>
    
</body>
</html>