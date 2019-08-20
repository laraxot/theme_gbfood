<?php

$def= [
     'steps' => [
         'location' => 'Scegli la località',
         'order_food' => 'Ordina ciò che preferisci',
         'delivery_take_out' => 'Ricevi a casa',
     ],
     'home' => 'Ordina dal tuo Divano!',
     'address_placeholder' => 'Via, Civico, Città, Provincia',

     'what_we_do' => [
         'change_way' => 'Cambia il tuo modo di ordinare a domicilio',
         'Choose_restaurants' => 'Scegli tra i nostri ristoranti il tipo di cucina che preferisci e ordina online il tuo pasto preferito.',
         'type_of_food' => 'Sul sito troverai ogni tipologia di cibo: cucina tradizionale, pizza, hamburger, sushi o cucina etnica.',
         'browse_menus' => "Ti basta sfogliare i menù dei ristoranti che servono la tua zona, ordinare e inserire l'indirizzo di consegna.",
         'foodtribu' => 'A tutto il resto pensa FoodTribù.',
     ],

     'how_it_works' => [
         '3_step' => 'Come funziona?',
             'choose_restaurant' => 'Scegli il ristorante',
             'choose_restaurant_text' => 'Scegli il ristorante e la tipologia di cucina.',
             'tasty_dish' => 'Ordina con Foodtribù',
             'tasty_dish_text' => 'Ordina online con il Foodtribù, senza scaricare nessuna App.',
             'pick_Delivery' => 'Ricevi il tuo ordine',
             'pick_Delivery_text' => 'Ricevi il tuo ordine dove vuoi! E Buon Appetito!',
             'card_paypal' => 'Paga in contrassegno, carta o Paypal',
     ],

     'iscrizione' => [
         'ristorante' => 'Hai un Ristorante?',
         'txt_1' => 'Diventa Partner del circuito FoodTribù con il tuo ristorante.',
         'txt_2' => 'Entra nel network del food delivery più innovativo d’Italia.',
         'cliente' => 'Diventa Cliente.',
         'txt_3' => 'Inizia sin da subito ad ordinare, registrati.',
         'txt_4' => 'Non serve scaricare nessuna app per ordinare, veloce, semplice e Free.',
         'registrati' => 'Registrati',
     ],

    'featured_restaurants' => [
         'featured' => 'Ristoranti in evidenza',
             'add_restaurant' => 'Aggiungi il tuo ristorante',
             'add_restaurant_text' => 'Unisciti alle migliaia di altri ristoranti che beneficiano di avere i loro menu nei nostri ',
             'directory' => 'archivi',
             'i_am_restaurant' => 'Sono un ristorante',
     ],
     'mobileapp' => [
             'best_app' => 'La migliore app di cibo d\'asporto',
             'text' => "Puoi scegliere ed ordinare il cibo ovunque tu sia, grazie all'App gratuita di consegna e cibo d'asporto, qualunque cosa desideri..",
             'soon_available' => 'Presto disponibile su ',
     ],

     'item' => [
             'view' => 'Visualizza',
     ],
    'address_placeholder' => 'Inserisci l\'indirizzo e trova i ristoranti più vicini a te ',
    'contact_us' => 'Contattaci',
];

$def['index'] = include(__DIR__.'/index.php');
$def['index']['field']=[
        'address_placeholder' => 'Via, Civico, Città, Provincia',
     ];


return $def;
