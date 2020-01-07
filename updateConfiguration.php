<?php

  header('Content-Type: application/json');


  list($title , $description , $configurationId) = [$_POST["title"] , $_POST["description"] , $_POST["configurationId"]];

   if (!$title || !$description || !$configurationId) {

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
    UPDATE configurazioni 
    SET title=? , description=? WHERE id=?
  
  ";

  
  $stmt = $conn -> prepare($sql);
  $stmt -> bind_param("ssi", $title, $description , $configurationId);

  $res = $stmt -> execute();
  echo json_encode($res);