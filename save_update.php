<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Leads Management</title>
</head>
<body>
    <div class="container mt-5">
        <a href="index.php" class="btn btn-success mb-3">Kembali</a>
<?php
$conn = new mysqli("localhost", "root", "", "leads_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_leads = $_POST['id_leads'];
    $nama_lead = $_POST['nama_lead'];

    $sql = "UPDATE leads SET nama_lead = '$nama_lead' WHERE id_leads = $id_leads";

    if ($conn->query($sql) === TRUE) {
    echo "</tbody><p>Data berhasil diupdate</p></table>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
