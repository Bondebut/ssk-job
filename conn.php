<?php
$host = 'localhost';  // Database host
$db = 'stck';   // Database name
$user = 'admin';       // Database user
$pass = 'admin';           // Database password

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

//connection
// $conn = new mysqli($servername,$username,$password);

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