<?php
// Connexion à la base de données RADIUS (à personnaliser selon la configuration de votre serveur RADIUS)
$db = new PDO("mysql:host=localhost;dbname=test", "root", "");

$username = $_GET["username"];
$startDate = $_GET["start_date"];
$endDate = $_GET["end_date"];

//$query = "SELECT acctoutputoctets, acctinputoctets, acctstarttime FROM radacct WHERE username = :username AND acctstarttime BETWEEN :startDate AND :endDate ORDER BY acctstarttime";


if(!empty($startDate) && ! empty($endDate)){

    $query ="SELECT 
    acctoutputoctets / 1048576 AS acctoutputkilobytes,
    acctinputoctets / 1048576 AS acctinputkilobytes,
    acctstarttime 
    FROM 
    radacct 
    WHERE 
    username = :username 
    AND acctstarttime BETWEEN :startDate AND :endDate 
    ORDER BY 
    acctstarttime";

    $stmt = $db->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":startDate", $startDate);
    $stmt->bindParam(":endDate", $endDate);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$outputOctets = [];
$inputOctets = [];
$timestamps = [];

foreach ($result as $row) {
    $outputOctets[] = $row["acctoutputkilobytes"];
    $inputOctets[] = $row["acctinputkilobytes"];
    $timestamps[] = date("Y-m-d H:i:s", strtotime($row["acctstarttime"]));
}

$data = [
    "outputOctets" => $outputOctets,
    "inputOctets" => $inputOctets,
    "timestamps" => $timestamps,
];

}
else {
    $query ="SELECT 
    SUM(acctoutputoctets/1048576) AS acctoutputkilobytes ,
    SUM(acctinputoctets/1048576) AS acctinputkilobytes 
    FROM 
    radacct 
    WHERE 
    username = :username  
   ";

$stmt = $db->prepare($query);
$stmt->bindParam(":username", $username);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$outputOctets = [];
$inputOctets = [];


foreach ($result as $row) {
    $outputOctets[] = $row["acctoutputkilobytes"];
    $inputOctets[] = $row["acctinputkilobytes"];
   
}

$data = [
    "outputOctets" => $outputOctets,
    "inputOctets" => $inputOctets,
  
];

}





header("Content-Type: application/json");
echo json_encode($data);
exit();  // Assurez-vous de sortir du script après avoir généré la réponse JSON
?>
