<?php
$countries = [
    "Japan" => "Japanese",
    "Italy" => "Italian",
    "Brazil" => "Brazilian",
    "Iran" => "Iranian",
    "Poland" => "Polish",
    "India" => "Indian",
    "Germany" => "German",
    "Canada" => "Canadian",
    "Australia" => "Australian",
    "Iraq" => "Iraqian",
    "Turkey" => "Turk",
    "Spanish" => "Spaniard"
];

$userInput = "Iran";

switch ($userInput) {
    case array_key_exists($userInput, $countries):
        $nationality = $countries[$userInput];
        echo "You are of $nationality nationality.";
        break;
    default:
        echo "I don't know what nationality you are.";
        break;
}
?>
