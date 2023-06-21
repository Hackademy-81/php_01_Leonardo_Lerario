<?php

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$somma = 0;

$counter = 0;

$array = [1,2,3,4,5,6];

    foreach ($array as $num) {
        if ($num % 2 == 0) {

            $somma = $somma + $num;

            // $pari += $num; si può usare questa sintassi più breve
            
           $counter++;

           
            
        }
        
    };

$media = $somma / $counter;

        //    echo $media;




// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
// $users = [
//     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
//   ];

// $users = [
//     ['name' => 'Leonardo', 'surname' => 'Martello', 'gender' => 'M'],
//     ['name' => 'Lynne', 'surname' => 'Rossi', 'gender' => 'F'],
//     ['name' => 'Stefano', 'surname' => 'Verdi', 'gender' => 'NB'],
// ];
// print_r("buongiorno " . $users[0]["name"]);

// foreach ($users as $value) {
//     if ($value['gender'] == 'M') {
//         print_r("buongiorno Sig. " . $value["name"] . " " .$value["surname"] . "\n");

//     }else if ($value['gender'] == 'F'){
//         print_r("buongiorno Sig.ra " . $value["name"]  . " " .$value["surname"] . "\n" );

//     }else if($value['gender'] == 'NB'){
//         print_r("buongiorno " . $value["name"]  . " " .$value["surname"] . "\n");
//     }else{
//         print_r("buongiorno");

//     }

// };






// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY66".

// for ($i=1; $i < 100 ; $i++) { 
//     if ($i % (3*5) == 0) {
//         print_r("HACKADEMY" . "\n");
//     } else if ($i % 5 == 0){
//         print_r('JAVASCRIPT' . "\n");
//     } elseif ($i % 3 == 0) {
//         print_r('PHP' . "\n");
//     }else{
//         print_r($i . "\n");
//     }
// }


?>