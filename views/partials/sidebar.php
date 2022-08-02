<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container py-2">
            <div class="navbar-toggler border-0 button-admin">
                <i class="btn btn-primary bi bi-list" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"></i>
            </div>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Dashboard</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="../views/v_index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/v_add.php">Tambah Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/Logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>