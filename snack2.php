<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $matches = [
        [
            'squadra1' => 'Los Angeles Lakers',
            'squadra2' => 'Chicago Bulls',
            'risultato1' => '118',
            'risultato2' => '112',
        ],
        [
            'squadra1' => 'Toronto Raptors',
            'squadra2' => 'Los Angels Clippers',
            'risultato1' => '88',
            'risultato2' => '98',
        ],
        [
            'squadra1' => 'Denver Nuggets',
            'squadra2' => 'Huston Rockets',
            'risultato1' => '105',
            'risultato2' => '95',
        ],
        [
            'squadra1' => 'Orlando Magic',
            'squadra2' => 'Milwaukee Bucks',
            'risultato1' => '95',
            'risultato2' => '111',
        ]
    ];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>Snack 2</title>
     </head>
     <body>
         <ul>
             <?php for($i = 0; $i < count($matches); $i++) { ?>
                 <li>
                     <h2>Match: <?php echo $matches[$i]['squadra1']?> VS <?php echo $matches[$i]['squadra2'];?> </h2>
                     <p><?php echo $matches[$i]['risultato1']?> -- <?php echo $matches[$i]['risultato2'];?></p>
                 </li>
            <?php } ?>
         </ul>

     </body>
 </html>
