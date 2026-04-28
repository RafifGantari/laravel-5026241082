<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 40px 20px;
        }

        .menu-title {
            text-align: center;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 40px;
        }

        .menu-card {
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 120px;
            border: none;
            border-radius: 14px;
            background: #1a56a0;
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            text-align: center;
            padding: 16px 10px;
        }

        .menu-card i {
            font-size: 26px;
        }

        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(52, 144, 220, 0.5);
            background: #2779bd;
            color: white;
            text-decoration: none;
        }

        .menu-card:active {
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <h1 class="menu-title"><i class="fas fa-th-large mr-2"></i>Menu Halaman</h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="/pertemuan1" class="card d-flex menu-card">
                    <i class="fas fa-book-open"></i>
                    Pertemuan 1
                </a>
            </div>
            <div class="col">
                <a href="/pertemuan2" class="card d-flex menu-card">
                    <i class="fas fa-book-open"></i>
                    Pertemuan 2
                </a>
            </div>
            <div class="col">
                <a href="/pertemuan3" class="card d-flex menu-card">
                    <i class="fas fa-book-open"></i>
                    Pertemuan 3
                </a>
            </div>
            <div class="col">
                <a href="/pertemuan4" class="card d-flex menu-card">
                    <i class="fas fa-book-open"></i>
                    Pertemuan 4
                </a>
            </div>
            <div class="col">
                <a href="/pertemuan5" class="card d-flex menu-card">
                    <i class="fas fa-book-open"></i>
                    Pertemuan 5
                </a>
            </div>
            <div class="col">
                <a href="/tugaslinktree" class="card d-flex menu-card">
                    <i class="fas fa-link"></i>
                    Tugas Linktree
                </a>
            </div>
            <div class="col">
                <a href="/tugaspertemuan3" class="card d-flex menu-card">
                    <i class="fas fa-tasks"></i>
                    Tugas Pertemuan 3
                </a>
            </div>
        </div>
    </div>

</body>
</html>