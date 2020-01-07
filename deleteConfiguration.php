<?php

  header('Content-Type: application/json');


  list($deleteId) = [$_POST["deleteId"]];

   if (!$deleteId) {

    echo json_encode(-3);
    return;
  }

  $servername = 'localhost';
  $username = 'root';
  $pws = 'root';
  $db = 'HotelDB';

  $conn = new mysqli($servername, $username, $pws, $db);
  if ($conn -> connect_errno) {

    echo json_encode(-4);
    return;
  }

  $sql = "
    DELETE FROM configurazioni
    WHERE configurazioni.id = ?
  
  ";

  
  $stmt = $conn -> prepare($sql);
  $stmt -> bind_param("i", $deleteId);

  $res = $stmt -> execute();
  echo json_encode($res);