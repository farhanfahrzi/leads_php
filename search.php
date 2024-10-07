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

        <h2>Data Leads</h2>

        <div>
            <?php
            

            if (isset($_GET['search'])) {
                $search = $_GET['search'];

                $koneksi = new mysqli("localhost", "root", "", "leads_db");
            
                if ($koneksi->connect_error) {
                    die("Connection failed: " . $koneksi->connect_error);
                }

                $sql = "SELECT leads.id_leads, leads.tanggal, sales.nama_sales, produk.nama_produk, leads.nama_lead, leads.no_wa, leads.kota 
                        FROM leads 
                        JOIN sales ON leads.id_sales = sales.id_sales 
                        JOIN produk ON leads.id_produk = produk.id_produk 
                        WHERE produk.nama_produk LIKE '%$search%' OR sales.nama_sales LIKE '%$search%'";
            
                $result = $koneksi->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table class='table table-bordered'>";
                    echo "<thead><tr><th>No</th><th>ID Input</th><th>Tanggal</th><th>Sales</th><th>Produk</th><th>Nama Leads</th><th>No WA</th><th>Kota</th><th>Aksi</th></tr></thead>";
                    echo "<tbody>";
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        $formatted_id = str_pad($row['id_leads'], 3, '0', STR_PAD_LEFT);
                        $formatted_date = date('d/m/Y', strtotime($row['tanggal']));
                        echo "<tr>
                                <td>" . $no++ . "</td>
                                <td>" . $formatted_id . "</td>
                                <td>" . $formatted_date . "</td>
                                <td>" . $row['id_leads'] . "</td>
                                <td>" . $row['tanggal'] . "</td>
                                <td>" . $row['nama_sales'] . "</td>
                                <td>" . $row['nama_produk'] . "</td>
                                <td>" . $row['nama_lead'] . "</td>
                                <td>" . $row['no_wa'] . "</td>
                                <td>" . $row['kota'] . "</td>
                                <td>
                                    <a href='update_leads.php?id=" . $row['id_leads'] . "' class='btn btn-warning btn-sm'>Update</a>
                                    <a href='delete_leads.php?id=" . $row['id_leads'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\");'>Delete</a>
                                </td>
                              </tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "<p>Tidak ada hasil ditemukan untuk pencarian '$search'.</p>";
                }
            
                $koneksi->close();
            }
            
            ?>


