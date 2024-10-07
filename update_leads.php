<?php
$conn = new mysqli("localhost", "root", "", "leads_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM leads WHERE id_leads = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Update Leads</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Update Data Leads</h2>
        <form action="save_update.php" method="POST">
            <input type="hidden" name="id_leads" value="<?php echo $row['id_leads']; ?>">

      
            <div class="mb-3">
                <label for="nama_lead" class="form-label">Nama Leads</label>
                <input type="text" class="form-control" name="nama_lead" value="<?php echo $row['nama_lead']; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
