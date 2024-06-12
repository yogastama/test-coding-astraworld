<?php
$data = [
    [
        "customerName" => "Putra Aji",
        "customerBirthDate" => 1982,
        "customerGender" => "male"
    ],
    [
        "customerName" => "Saka Usni",
        "customerBirthDate" => 1921,
        "customerGender" => "male"
    ],
    [
        "customerName" => "Siti Halimah",
        "customerBirthDate" => 1982,
        "customerGender" => "female"
    ],
    [
        "customerName" => "Rahmi",
        "customerBirthDate" => 1987,
        "customerGender" => "female"
    ]
];

$filteredData = array_filter($data, function ($customer) {
    return $customer['customerBirthDate'] < 1985;
});
echo '<pre>';
print_r($filteredData);
