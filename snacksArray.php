<?php

declare(strict_types=1);



$drinks = array(
    "Coca-Cola",
    "Pepsi",
    "Sprite",
    "Dr. Pepper",
    "Mountain Dew",
    "Fanta",
    "7UP",
    "Root Beer",
    "Ginger Ale",
    "Lemon-Lime Soda"
);

function getRandomDrink($drinks)
{
    return $drinks[array_rand($drinks)];
}

$dips = array(
    "Salsa",
    "Guacamole",
    "Hummus",
    "Ranch",
    "French Onion",
    "Tzatziki",
    "Spinach and Artichoke",
    "Queso",
    "Blue Cheese",
    "Buffalo Chicken"
);

function getRandomDip($dips)
{
    return $dips[array_rand($dips)];
}

$crisps = array(
    "Salted",
    "Barbecue",
    "Sour Cream and Onion",
    "Cheddar Cheese",
    "Salt and Vinegar",
    "Jalapeño",
    "Ranch",
    "Buffalo",
    "Dill Pickle",
    "Sweet Chili"
);

function getRandomCrisp($crisps)
{
    return $crisps[array_rand($crisps)];
}

$nuts = array(
    "Almonds",
    "Walnuts",
    "Pecans",
    "Cashews",
    "Hazelnuts",
    "Pistachios",
    "Macadamia Nuts",
    "Brazil Nuts",
    "Pine Nuts",
    "Chestnuts"
);

function getRandomNut($nuts)
{
    return $nuts[array_rand($nuts)];
}
