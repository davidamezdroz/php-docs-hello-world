<?php
$accountName = "swordsa1";
$accountKey = "TL96yoiEXDITU/gPUYY1AnMeSE9qQjyJvMKJ7XJl4RbpRXvyYf3LnsLro4whtfVXfZPUuLggOfp5+ASt5FWn7g==";
$containerName = "test";

$connectionString = "DefaultEndpointsProtocol=https;AccountName=$accountName;AccountKey=$accountKey;EndpointSuffix=core.windows.net";
$blobClient = \WindowsAzure\Common\ServicesBuilder::getInstance()->createBlobService($connectionString);

$blobs = $blobClient->listBlobs($containerName);

echo "<h1>Liste des fichiers dans le conteneur $containerName :</h1>";
echo "<ul>";
foreach ($blobs as $blob) {
    echo "<li>" . $blob->getName() . "</li>";
}
echo "</ul>";
?>
