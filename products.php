<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: access');
header('Access-Control-Allow-Methods: GET');
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
    $products = [
        [
            "id" => 1,
            "name" => "Product 1",
            "price" => 10.99,
            "description" => "Description for Product 1",
            "image" => "product_1",
            "currency" => "RSD"
        ],
        [
            "id" => 2,
            "name" => "Product 2",
            "price" => 19.99,
            "description" => "Description for Product 2",
            "image" => "product_2",
            "currency" => "RSD"
        ],
        [
            "id" => 3,
            "name" => "Product 3",
            "price" => 5.99,
            "description" => "Description for Product 3",
            "image" => "product_3",
            "currency" => "RSD"
        ],
        [
            "id" => 4,
            "name" => "Product 4",
            "price" => 13.99,
            "description" => "Description for Product 4",
            "image" => "product_4",
            "currency" => "RSD"
        ],
        [
            "id" => 5,
            "name" => "Product 5",
            "price" => 44.99,
            "description" => "Description for Product 5",
            "image" => "product_5",
            "currency" => "RSD"
        ]
        // Add more products as needed
    ];

    // Set response headers to allow cross-origin requests (adjust as needed)
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");

    // Return the products as a JSON response
    echo json_encode($products);
