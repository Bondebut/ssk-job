<?php
$servername = "localhost";
$username = "root";
$password = "AAaeiou88";

//connection
$conn = new mysqli($servername,$username,$password);

//checked
// if ($conn->connect_error){
//     die("Connection failed: ". $conn->connect_error);
// }
// echo"Connected Successfully";

// $sql = "INSERT INTO stock (List, Date, Id_list, Status)
// VALUES ('ชุดเอกสาร', '2024/12/22', 'SSK11155444',จัดส่งสำเร็จ)";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
//   }
  
//   $conn->close();
?>