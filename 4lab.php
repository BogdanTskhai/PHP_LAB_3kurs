<?php

$name = "Max";
if (strlen($name) < 4) {
    print "That is a short name\n";
}

$Kg = 7;
if ($Kg < 9) {
    print "Okay\n";
} else {
    print "not okay\n";
}


$vehicle = "fdfg";
switch ($vehicle) {
        case 'car':
        print "Has at least three wheels\n";
    case 'bus':
        print "Beep beep\n";
        break;
    case 'train':
        print "Runs on tracks\n";
        break;
    case 'car':
        print "Has at least three wheels\n";
        break;
    case 'helicopter':
        print "Can fly\n";
        break;
    case 'bicycle':
        print "You never forget once you've learned\n";
        break;
    //default:
        //print "You've chosen the road less traveled\n";
        //break;
}


$userNameCorrect = true;
$passwordCorrect = true;
if ($userNameCorrect && $passwordCorrect) {
    print "Вірно\n";
} else {
    print "Невірно введені дані\n";
}