<?php

   /* Obtener los datos de la URL y convertirlos en una matriz. */
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://country.io/names.json',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    $i = 1;
    $array = [];

    foreach (json_decode($response) as $val) {
     array_push(
        $array ,["id" => $i, 'name' => $val]
     );
     $i++;
    }
    echo json_encode($array);
    
?>
