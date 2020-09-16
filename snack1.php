<!-- Passare come parametri GET name, mail ed age e verificare (cercando i metodi che
non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail
contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$nome = $_GET['name'];
$mail = $_GET['mail'];
$eta = $_GET['age'];

//check inserimento dei tre campi corretto
if(empty($mail) || empty($nome) || empty($eta)){
    //errore inserimento dati
    $text = "Errore! Manca un dato! Inserisci nome, età e mail";
} else {
    // check correttezza mail inserita
    if((strpos($mail, "@") !== false) && (strpos($mail, ".") !== false)){
        // check mail ok --> check correttezza nome inserito
        $nomeLength = strlen($nome);
        if($nomeLength < 3){
            //errore nome
            $text = "Errore! Nome troppo piccolo. Minimo 3 caratteri!";
        // check nome ok --> check correttezza età
    } else if(is_numeric($eta)){
                $text = "ACCESSO CONSENTITO";
            } else {
                //errore età
                $text = "Errore! Inserire la giusta età!";
            }
    } else {
        //errore mail errata
        $text = 'Errore! mail errata!';
    }
}

echo $text;

 ?>
