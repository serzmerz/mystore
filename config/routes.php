<?php
return [
    "root" => [
        "pattern" => "/",
        "method" => "GET",
        "action" => "Controllers\\IndexController@index"
    ],
    "product_list" =>
        [
            "pattern" => "/product",
            "method" => "GET",
            "action" => "ProductController@getAllGoods"
        ],
    "single_product" => [
        "pattern" => "/product/{id}",
        "method" => "GET",
        "variables" => [
            "id" => "\d+"
        ],
        "action" => "Controllers\\IndexController@getProduct"
    ],
    "create_one_product" => [
        "pattern" => "/product",
        "method" => "POST",
        "action" => "ProductController@createOneProduct"
    ],
    "update_one_product" => [
        "pattern" => "/product/{id}",
        "method" => "PUT",
        "variables" => [
            "id" => "\d+"
        ],
        "action" => "ProductController@updateOneProduct"
    ],
    "delete_one_product" => [
        "pattern" => "/product/{id}",
        "method" => "DELETE",
        "variables" => [
            "id" => "\d+"
        ],
        "action" => "ProductController@deleteOneProduct"
    ]
];