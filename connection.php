<?php

// Define MySQL connection and credentials
$pdo_dsn='mysql:dbname=tarango_descargas_folleto;host=localhost';
$pdo_user='root';     
$pdo_password='';

$fullname = $_POST['first_name'];
$email = $_POST['mail'];
$phone = $_POST['telephone'];

try {
    // Establish connection to database
    $conn = new PDO($pdo_dsn, $pdo_user, $pdo_password);

    // Throw exceptions in case of error.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Use prepared statements to mitigate SQL injection attacks.
    // See https://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php for more details
    $qry=$conn->prepare('INSERT INTO registros_folleto (fullname, email, phone) VALUES (?,?,?)');

    // Execute the prepared statement using user supplied data.
    $qry->execute(Array(":fullname" => $fullname, ':email'=>$email, ':phone'=>$phone));
    //$qry->bindValue(":fullname",$fullname);
    //$qry->bindValue(":email",$email);
    //$qry->bindValue(":phone",$phone);

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage() . " file: " . $e->getFile() . " line: " . $e->getLine();
    exit;
}
 /*$servername ="localhost";
 $username = "root";
 $password = "";
 $mysqli = mysqli_connect ($servername, $username, $password) or die ("Error al conectarse con el host");
 $sql = mysqli_select_db ($mysqli, 'tarango_descargas_folleto') or die ("Incapaz de conectarse con la base de datos");*/

?>