<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .navbar {
            background: transparent !important;
            z-index: 10;
            position: absolute;
            width: 100%;
        }

        .btn-custom {
            background-color: #003166;
            color: #fff;
            padding: 2px 50px;
            border-radius: 2px;
            text-decoration: none;
        }

        .btn-custom:hover {
            background-color: #00214d;
            color: #fff;
        }

        .btn-outline-primary {
            border-color: #003166;
            color: #003166;
            padding: 2px 50px;
            border-radius: 2px;
            border: 2px solid #003166;
        }

        .btn-outline-primary:hover {
            background-color: #003166;
            color: #fff;
            border: solid 2px #003166;
        }

        .navbar-nav .nav-link {
            color: #245c98;
        }

        .navbar-nav .nav-link:hover {
            color: #003166;
        }

        .hero-section {
            height: 800px;
            background: url('designer_1.png') no-repeat right center;
            background-size: contain;
            position: relative;
        }
        p {
            color: #003166;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="container-fluid d-flex align-items-center px-5">

            <div>
                <ul class="navbar-nav flex-row">
                    <li class="nav-item px-3"><a class="nav-link font-blue" href="#">Home</a></li>
                    <li class="nav-item px-3"><a class="nav-link font-blue" href="#">About</a></li>
                    <li class="nav-item px-3"><a class="nav-link font-blue" href="#">Contact</a></li>
                </ul>
            </div>

            <a href="#" class="btn btn-custom ml-auto px-5">Buy Now</a>

        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center y-auto">

                <div class="col-md-6">
                    <h1 class="mb-4">
                        Introduce Your Product Quickly & Effectively
                    </h1>

                    <p class="mb-4">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem sit consequuntur id velit numquam nesciunt itaque odit rerum, reprehenderit animi deleniti autem, voluptatum pariatur? Illum voluptates beatae omnis odio ut.
                        <br><br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, voluptate. Doloribus, quisquam. Voluptas, voluptate. Doloribus, quisquam.
                    </p>

                    <a href="#" class="btn btn-custom mr-3">
                        Purchase UI Kit
                    </a>

                    <a href="#" class="btn btn-outline-primary font-weight-bold">
                        Learn More
                    </a>

                </div>
            </div>
    </section>

</body>

</html>
