<?php
$names = [
    "Jolyne" => 1.55,
    "Jotaro" => 1.88,
    "Kira" => 1.70
];
foreach ($names as $name => $height) {
    echo "Ім'я: $name, зріст: $height м.";
}

$S = [1, 5, 7, 9];
$BR = [2, 4, 6];
$SBR = [...$S, ...$BR];

sort($SBR);
print_r($SBR);

$movies = [
    "Back to the Future" => [
        "duration" => 116,
        "leadingActor" => "Michael J. Fox"
    ],
    "The Fifth Element" => [
        "duration" => 126,
        "leadingActor" => "Bruce Willis"
    ],
    "Alien" => [
        "duration" => 117,
        "leadingActor" => "Sigourney Weaver"
    ]
];

foreach ($movies as $title => $info) {
    echo "фільм: $title, час: {$info['duration']} хв, основний актор: {$info['leadingActor']}<br>";
}
?>