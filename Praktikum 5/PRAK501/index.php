<html>
    <head>
        <title>Database Ojek Online</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <header data-bs-theme="dark">
            <div class="navbar navbar-dark bg-success bg-gradient shadow-sm">
                <div class="container">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <strong>Perpustakaan</strong>
                </a>
                </div>
            </div>
        </header>

        <main>
            <section class="py-5 text-center container-fluid bg-success bg-gradient bg-opacity-75">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light text-light">Database Perpustakaan</h1>
                    </div>
                </div>
            </section>
            <div class="album py-5 bg-body-tertiary">
                <div class="container"> 
                    <main class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <h5 class="card-header text-bg-success bg-gradient">Data Member</h5>
                            <div class="card-body">
                                <p class="card-text"></p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="Member.php" class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <h5 class="card-header text-bg-success bg-gradient">Data Buku</h5>
                            <div class="card-body">
                                <p class="card-text"></p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="Buku.php" class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <h5 class="card-header text-bg-success bg-gradient">Data Peminjaman</h5>
                            <div class="card-body">
                                <p class="card-text"></p>
                            <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="Peminjaman.php" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="text-body-secondary py-5">
            <div class="container">
                <p class="float-end mb-1">
                <a href="#">Back to top</a>
                </p>
            </div>
        </footer>
    </body>
</html>