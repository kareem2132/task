<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Product Prices</title>
    <style>
        body {
            background-color:rgb(162, 179, 203); 
            color: white;
        }
        h3 {
            color: white;
        }
    </style>
</head>
<body class="p-5">

<div class="container bg-white text-dark rounded p-4">
    <h3 class="mb-3">Product Prices</h3>

    <ul class="list-group">
        <?php
        $products = [
            "Monitor" => 14200,
            "Chair" => 12000,
            "Headset" => 4000,
            "Keyboard" => 3000,
            "Mouse" => 2100
        ];
        arsort($products);
        foreach ($products as $product => $price) {
            echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                    $product
                    <span class='badge bg-primary rounded-pill'>{$price} EGP</span>
                  </li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
