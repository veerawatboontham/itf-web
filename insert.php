<?php

$conn = mysqli_init();
mysqli_real_connect($conn, '63070161lab-13.mysql.database.azure.com', 'Veerawat@63070161lab-13', 'Khv30043004', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['Product'];
$comment = $_POST['Price'];
$link = $_POST['Amount'];


$sql = "INSERT INTO guestbook (Product , Price , Amount) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
