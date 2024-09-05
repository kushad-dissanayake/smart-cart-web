<?php

require __DIR__.'/vendor/autoload.php';


use Kreait\Firebase\Factory;
use Kreait\Firebase\Contract\Storage;

$factory = (new Factory)
     ->withServiceAccount('smart-cart-database-2eea0-firebase-adminsdk-gk1k5-f3a621885f.json')
     ->withDatabaseUri('https://smart-cart-database-2eea0-default-rtdb.firebaseio.com');

$database = $factory->createDatabase();

// Assuming you meant to create a StorageClient
$storageClient = new StorageClient([
    'keyFilePath' => __DIR__.'/smart-cart-database-2eea0-firebase-adminsdk-gk1k5-f3a621885f.json'
]);

$bucket = $storageClient->bucket('gs://smart-cart-database-2eea0.appspot.com');
?>
