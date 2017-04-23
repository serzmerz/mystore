<?php

return [
    "routes" => include('routes.php'),
    "path_to_views" => dirname(__FILE__) . '/../src/Views',
    "middleware" => [
        'role' => 'Mystore\\Middleware\\IsAdminMiddleware',
        'old' => 'Mystore\\Middleware\\OldMiddleware',
        'check' => 'Mystore\\Middleware\\CheckMiddleware'
    ]
];