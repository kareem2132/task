<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sorting Methods</title>
    <style>
        body {
            background-color: #0d6efd;
            color: white;
        }
        .box {
            background-color: #1e1e1e;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        h3 {
            color: #0d6efd;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="p-5">

<div class="container">

    <?php
    $products = [
        "Monitor" => 1200,
        "Chair" => 1000,
        "Headset" => 400,
        "Keyboard" => 300,
        "Mouse" => 150
    ];
    ?>
    <div class="box">
        <h3>asort</h3>
        <ul class="list-group">
            <?php
            $asortProducts = $products;
            asort($asortProducts);
            foreach ($asortProducts as $product => $price) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                        $product
                        <span class='badge bg-primary rounded-pill'>{$price} EGP</span>
                      </li>";
            }
            ?>
        </ul>
    </div>
    <div class="box">
        <h3>sort</h3>
        <ul class="list-group">
            <?php
            $sortProducts = $products;
            $productNames = array_keys($sortProducts);
            $productPrices = array_values($sortProducts);
            sort($productPrices); 
            foreach ($productPrices as $index => $price) {
                $name = $productNames[$index] ?? "Product";
                echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                        $name
                        <span class='badge bg-primary rounded-pill'>{$price} EGP</span>
                      </li>";
            }
            ?>
        </ul>
    </div>
    <div class="box">
        <h3>rsort</h3>
        <ul class="list-group">
            <?php
            $rsortProducts = $products;
            $productNames = array_keys($rsortProducts);
            $productPrices = array_values($rsortProducts);
            rsort($productPrices); 
            foreach ($productPrices as $index => $price) {
                $name = $productNames[$index] ?? "Product";
                echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                        $name
                        <span class='badge bg-primary rounded-pill'>{$price} EGP</span>
                      </li>";
            }
            ?>
        </ul>
    </div>
    <div class="box">
        <h3>ksort</h3>
        <ul class="list-group">
            <?php
            $ksortProducts = $products;
            ksort($ksortProducts);
            foreach ($ksortProducts as $product => $price) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-center'>
                        $product
                        <span class='badge bg-primary rounded-pill'>{$price} EGP</span>
                      </li>";
            }
            ?>
        </ul>
    </div>

</div>

</body>
</html>
