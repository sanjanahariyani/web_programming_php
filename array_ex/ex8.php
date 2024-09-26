<?php
$countries = array(
    "France" => "Paris",
    "Germany" => "Berlin",
    "Italy" => "Rome",
    "Spain" => "Madrid",
    "Canada" => "Ottawa"
);

$specific_country = "Italy";
if (array_key_exists($specific_country, $countries)) {
    $capital = $countries[$specific_country];
    echo "The capital of $specific_country is $capital"."<br>";
} else {
    echo "Country not found in the array"."<br>";
}
?>