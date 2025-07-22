<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $text = $_GET['text'] ?? '';
    
    echo "<p>Original: $text</p>";
    echo "<p>Length: " . strlen($text) . "</p>";
    echo "<p>Safe: " . str_replace("bad", "****", $text) . "</p>";
    echo "<p>Very safe: " . str_replace("bad", "****", strtolower($text)) . "</p>";
    echo "<p>First 10: " . substr($text, 0, 10) . "</p>";
    echo "<p>Capital: " . ucfirst($text) . "</p>";
    echo "<p>Uppercase: " . strtoupper($text) . "</p>";
}
?>