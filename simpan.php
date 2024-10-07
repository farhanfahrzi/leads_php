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

        <div>
        <?php

        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "leads_db";

        $koneksi = new mysqli($host,$username,$password,$database);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tanggal = $_POST['tanggal'];
            $id_sales = $_POST['id_sales'];
            $id_produk = $_POST['id_produk'];
            $nama_lead = $_POST['nama_lead'];
            $no_wa = $_POST['no_wa'];
            $kota = $_POST['kota'];
            $id_user = 1;   

            $sql = "INSERT INTO leads (tanggal, id_sales, id_produk, nama_lead, no_wa, kota, id_user) 
            VALUES ('$tanggal', $id_sales, $id_produk, '$nama_lead', '$no_wa', '$kota', $id_user)";

        if ($koneksi->query($sql) === TRUE) {
                   
                echo "</tbody><p>Data berhasil disimpan!</p></table>";
            } else {
                echo "Error: " . $sql . "<br>" . $koneksi->error;
            }
            
            $koneksi->close();
}
            
?>



