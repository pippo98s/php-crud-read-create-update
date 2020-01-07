<?php
  header('Content-Type: application/json');
  $servername = 'localhost';
  $username = 'root';
  $pws = 'root';
  $db = 'HotelDB';
  $conn = new mysqli($servername, $username, $pws, $db);
  if ($conn -> connect_errno) {
    echo "connection fail: " . $conn -> connect_errno;
  }
  $ospiti = [];
  $sql = "
      SELECT *
      FROM configurazioni 
  ";
  $res = $conn -> query($sql);
  if ($res -> num_rows > 0) {
    while($row = $res -> fetch_assoc()) {
      $ospiti[] = $row;
    }
  }
  $conn -> close();
  echo json_encode($ospiti);