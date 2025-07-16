<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Devices Over 10000</title>
</head>
<body class="bg-success text-white p-5">

    <div class="container bg-white text-dark rounded p-4">
        <h2 class="mb-4 text-center">Devices Over 10000</h2>
        <table class="table table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $products = [
                    ["name" => "Laptop",  "price" => 15000, "quantity" => 3],
                    ["name" => "Phone",   "price" => 8000,  "quantity" => 5],
                    ["name" => "Tablet",  "price" => 6000,  "quantity" => 2],
                    ["name" => "Monitor", "price" => 11000, "quantity" => 4]
                ];

                foreach ($products as $product) {
                    if ($product['price'] > 10000) {
                        echo "<tr>";
                        echo "<td>{$product['name']}</td>";
                        echo "<td>{$product['price']}</td>";
                        echo "<td>{$product['quantity']}</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
