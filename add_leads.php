<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Leads</title>
</head>
<body>
    <div class="container mt-5">
        <a href="index.php" class="btn btn-success mb-3">Kembali</a>
        
        <h2>Selamat Datang Di Tambah Leads</h2>
        <form action="simpan.php" method="post">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>
            <div class="mb-3">
                <label for="sales" class="form-label">Sales</label>
                <select class="form-select" id="sales" name="id_sales" required>
                    <option value="" disabled selected>-- Pilih Sales --</option> 
                    <option value="1">Sales 1</option>
                    <option value="2">Sales 2</option>
                    <option value="3">Sales 3</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="produk" class="form-label">Produk</label>
                <select class="form-select" id="produk" name="id_produk" required>
                    <option value="" disabled selected>-- Pilih Produk --</option> 
                    <option value="1">Cipta Residence 2</option>
                    <option value="2">The Rich</option>
                    <option value="3">Namorambe City</option>
                    <option value="4">Grand Banten</option>
                    <option value="5">Turi Mansion</option>
                    <option value="6">Cipta Residence 1</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nama_lead" class="form-label">Nama Lead</label>
                <input type="text" class="form-control" id="nama_lead" name="nama_lead" required>
            </div>
            <div class="mb-3">
                <label for="no_wa" class="form-label">No. WhatsApp</label>
                <input type="text" class="form-control" id="no_wa" name="no_wa" required>
            </div>
            <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
</body>
</html>