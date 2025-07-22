<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header("Location: login.php");
    exit();
}

$book_price = 100;
$pen_price = 10;
$book_qty = 2;
$pen_qty = 5;

$total = ($book_price * $book_qty) + ($pen_price * $pen_qty);
$tax = $total * 0.1;
$grandTotal = $total + $tax;
?>

<h2>Welcome Student #<?php echo $_SESSION['student_id']; ?></h2>

<h3>Order Summary:</h3>
<ul>
    <li>Book: <?php echo $book_qty; ?> x <?php echo $book_price; ?> = <?php echo $book_price * $book_qty; ?> EGP</li>
    <li>Pen: <?php echo $pen_qty; ?> x <?php echo $pen_price; ?> = <?php echo $pen_price * $pen_qty; ?> EGP</li>
</ul>

<p><strong>Total:</strong> <?php echo $total; ?> EGP</p>
<p><strong>Tax (10%):</strong> <?php echo $tax; ?> EGP</p>
<p><strong>Grand Total:</strong> <?php echo $grandTotal; ?> EGP</p>

<a href="logout.php">Logout</a>
