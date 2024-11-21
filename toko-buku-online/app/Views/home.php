<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light mb-3">
        <div class="container">
            <a class="navbar-brand" href="#">toko buku online</a>
            <a href="<?= base_url('chart')?>" class="bt btn-secondary position-relarive">
            <button class="btn btn-secondary position-relative">
                chart
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    99+
                    <span class="visually-hidden">unread messages</span>
                </span>
            </button>
        </div>
    </nav>
    <div class="container">
        <div class="row bg-primary-subtle">
            <div class="col-6 p-5">
                <h1> Selamat Datang Di Toko Buku Online </h1>
                <p>Kami menyediakan berbagai jenis buku dari berbagai penerbit terkemuka.</p>
                <button class="btn btn-warning">Lihat Produk</button>
            </div>
            <div class="col-6 p-5">
                <h1>Temukan Buku Favorit Anda</h1>
                <form action="">
                    <div class="mb-3">
                        <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Buku">
                    </div>
                    <div class="mb-3">
                        <select name="kategori" id="kategori">
                            class="form-control">
                            <option value="">-- Pilih kategori --</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="pengarang" id="pengarang" placeholder="Pengarang" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Cari</button>
                    </div>
            </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h2 class="mb-3">Buku Best Seller</h2>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">senja & pagi</h5>
                            <p class="card-text">Rp. 70.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">plang pergi</h5>
                            <p class="card-text">Rp. 95.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">cantik itu luka</h5>
                            <p class="card-text">Rp. 80.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">hilang dalam dekapan semeru</h5>
                            <p class="card-text">Rp. 75.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/5.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">rapijali</h5>
                            <p class="card-text">Rp. 85.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <img src="<?= base_url() ?>/images/6.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">love</h5>
                            <p class="card-text">Rp. 98.000</p>
                            <a href="#" class="btn btn-primary">Add to chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="p-5">
        &copy; 2024. Kelas A Pemrograman Web 2. All rights reserved.
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>