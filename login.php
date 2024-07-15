<?php
$valid_username = '230929294';
$valid_password = '11/09/2003';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="Adobe Scan Jul 03, 2023.pdf"');
        readfile('"C:\Apache24\htdocs\Adobe Scan Jul 03, 2023.pdf"');
        exit();
    } else {
        echo 'Invalid username or password.';
    }
}
?>
