<?php

$pdo = new PDO($dsn, $username, $password);

$dsn = 'mysql:host='::localhost;';dbname='::oop-pdo-toets-herkansing;';charset=UTF8;';

$username = 'akkie2';
$password = 'hoi';



$query = 'INSERT INTO `richestpeople`(name, networth, age, company) VALUES(:name, :networth, :age, :company)';

$statement = $pdo->prepare($query);
$statement->bindParam(':name', $name);
$statement->bindParam(':networth', $networth);
$statement->bindParam(':age', $age);
$statement->bindParam(':company', $company);
$statement->execute();
