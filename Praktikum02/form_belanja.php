<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>Form Belanja Online</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Belanja Online</h1>
        <form method="POST" action="form_belanja.php">
            <div class="form-group">
                <label for="customer">Nama Customer</label>
                <input type="text" class="form-control" id="customer" name="customer" placeholder="Nama Customer">
            </div>
            <div class="form-group">
                <label for="produk">Pilih Produk</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produk" id="tv" value="TV" checked>
                    <label class="form-check-label" for="tv">
                        TV - Rp. 4.200.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produk" id="kulkas" value="Kulkas">
                    <label class="form-check-label" for="kulkas">
                        KULKAS - Rp. 3.100.000
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="produk" id="mesin_cuci" value="MESIN CUCI">
                    <label class="form-check-label" for="mesin_cuci">
                        MESIN CUCI - Rp. 3.800.000
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Beli</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
            </div>
            <button type="submit" name="proses" value="Simpan" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan form telah disubmit

    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    // Pastikan variabel-variabel $_POST ada sebelum digunakan
    if ($customer && $produk && $jumlah) {
        $harga = 0;
        if ($produk == "TV") {
            $harga = 4200000;
        } 
        elseif ($produk == "KULKAS") {
            $harga = 3100000;
        } 
        elseif ($produk == "MESIN CUCI") {
            $harga = 3800000;
        }

        $total_belanja = $harga * $jumlah;

        echo "<p>Nama Customer: $customer</p>";
        echo "<p>Produk Pilihan: $produk</p>";
        echo "<p>Jumlah Beli: $jumlah</p>";
        echo "<p>Total Belanja: Rp. $total_belanja</p>";
        } else {
        echo "<p>Silakan isi formulir terlebih dahulu.</p>";
        }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>