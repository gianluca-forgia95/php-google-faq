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
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- /FontAwesome -->
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet"> 
    <!-- /Google Font -->
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /CSS -->
    <title>Google Faq</title>
</head>
<body>
 <header>
  <div class="logo">
    <img src="https://www.geducator.com/wp-content/uploads/icons8-faq-528-300x300.png" alt="Q&A Logo">
  </div>
  <div class="intestazione">
    <h1>Le Domande più Frequenti</h1>
    <i class="fas fa-arrow-down arrow"></i>
  </div>
 </header>
 <div class="container">
 <div class="box">
 <ul>
   <?php foreach ($Faq as $text) { ?>
     <li>
       <h3> <?php echo $text['question'] ?></h3>
       <p> <?php echo $text['answer'] ?></p>
     </li>
   <?php } ?>

  </ul>
 </div>
  
  
 </div>
    
</body>
</html>