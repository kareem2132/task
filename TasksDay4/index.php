<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>جدول المنتجات</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">جدول المنتجات</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>الاسم</th>
                    <th>السعر (جنيه مصري)</th>
                    <th>الكمية</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $products = [
                    ["name" => "Laptop", "price" => 15000, "quantity" => 3],
                    ["name" => "Phone", "price" => 8000, "quantity" => 5],
                    ["name" => "Tablet", "price" => 6000, "quantity" => 2],
                ];
                foreach ($products as $product) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($product["name"]) . "</td>";
                    echo "<td>" . htmlspecialchars($product["price"]) . "</td>";
                    echo "<td>" . htmlspecialchars($product["quantity"]) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>