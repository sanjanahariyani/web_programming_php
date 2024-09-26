<?php
$cities = [
    "Tokyo" => [
        "population" => 13929286,
        "area" => 2191,
        "country" => "Japan"
    ],
    "Paris" => [
        "population" => 2148327,
        "area" => 105.4,
        "country" => "France"
    ],
    "New York" => [
        "population" => 8419600,
        "area" => 789,
        "country" => "USA"
    ],
    "Berlin" => [
        "population" => 3644826,
        "area" => 891.8,
        "country" => "Germany"
    ],
    "Sydney" => [
        "population" => 5312163,
        "area" => 12367,
        "country" => "Australia"
    ]
];

foreach ($cities as $city => $info) {
    echo "City: $city"."<br>";
    echo "Population: " . $info["population"] . "<br>";
    echo "Area: " . $info["area"] . " km²"."<br>";
    echo "Country: " . $info["country"] . "<br><br>";
}
?>