<?php
//1
$limerick = [
    "Біда помучить,",
    " і мудрості научить...",];
$outputFile = __DIR__ . '/Virsh.txt';
$fileHandle = fopen($outputFile, 'w');
foreach ($limerick as $line) {
    fwrite($fileHandle, $line . "\n");}
fclose($fileHandle);

//2
$url = 'http://jsonplaceholder.typicode.com/posts/1'; #https не працює
$jsonString = file_get_contents($url);
$jsonArray = json_decode($jsonString, true);
var_dump($jsonArray);

//3
$dir = __DIR__ . '/data/';
$fileNamePattern = '*.txt';
$files = glob($dir . $fileNamePattern);
$outputFile = __DIR__ . '/total.txt';
if (file_exists($outputFile)) {
    unlink($outputFile);
}
$total = 0;
    for ($i = 0; $i < count($words); $i += 3) {
    if (!isset($words[$i + 2])) break;

    $firstname = $words[$i];
    $lastname = $words[$i + 1];
    $score = intval($words[$i + 2]);
}
$outputFileHandle = fopen($outputFile, 'a');
fwrite($outputFileHandle, "total of all scores = $total");
fclose($outputFileHandle);

print file_get_contents($outputFile);
?>