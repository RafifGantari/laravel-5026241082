<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Competition PEM 2026 – AIChE ITS SC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <script>
        function showme() {
            Swal.fire({
                title: 'Hallo!',
                text: 'Selamat Siang!',
            })
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.backgroundColor = "yellow";
            // document.getElementById("intro").element.innerHTML = "Sistem Informasi ITS";
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">

    </script>
    <style>
        body {
            background-color: #c0aeb0;
        }

        #card-linktree {
            background-color: #f5e1e4;
            min-height: 100vh;
            max-width: 600px;
            border-radius: 20px;
        }

        @media (max-width: 768px) {
            #card-linktree {
                border-radius: 0;
            }
        }

        .profile-logo {
            width: 96px;
            height: 96px;
            background-color: #ffffff;

        }

        .profile-title {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .icon {
            width: 40px;
            height: 40px;
            background-color: rgb(245, 245, 245);
            margin: 10px;
        }

        .icon:hover {
            background-color: white;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .social-icons a {
            color: #333;
            font-size: 1.5rem;
        }

        .btn-linktree {
            background-color: #ffffff;
            color:#000000;
            text-decoration: none;
        }

        .btn-linktree:hover {
            background-color: #e0e0e0;
            color:#000000;
            text-decoration: none;
        }

        .footer-links {
            margin-top: 20px;
            font-size: 10px;
        }

        .footer-links a {
            color: #000000;
        }
    </style>
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="container d-flex flex-column min-vh-100 mx-auto mt-0 mt-md-5 shadow " id="card-linktree">
        <div class="d-flex justify-content-between align-items-center">
            <div class="icon rounded-circle d-flex justify-content-center">
                <h1>*</h1>
            </div>
            <div class="d-flex gap-1">
                <div class="icon rounded-circle d-flex align-items-center justify-content-center">
                    <i data-feather="download"></i>
                </div>
            </div>
        </div>

        <div class="content text-center flex-grow-1 d-flex flex-column mt-3">

            <div>
                <img src="assets/img/logo-linktree.webp"
                    class="profile-logo rounded-circle justify-content-center align-items-center mx-auto" alt="Logo">
            </div>

            <div class="profile-title" id="intro">RPC PEM AIChE ITS 2026</div>
            <div class="profile-title2">Research Poster Competition ITS</div>

            <div class="d-flex flex-column mt-3">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScCCGPSu5pDcm_z0Xo4C5Sb2Ec7fSSzxsdtC8UJdaCxLilRBw/viewform"
                    class="btn-linktree d-flex justify-content-between rounded-pill mb-3 shadow p-3" id="tombol">
                    <span class="mx-auto">RPC Essay Submission</span>
                    <span>⋮</span>
                </a>

                <a href="https://docs.google.com/forms/d/e/1FAIpQLSdceMELXB0KTrhPgzJJQXDuelIr4IA8v2gviq67ntbdUfFDMg/viewform"
                    class="btn-linktree d-flex justify-content-between rounded-pill mb-3 shadow p-3">
                    <span class="mx-auto">REGISTRATION FORM RPC 2026</span>
                    <span class="">⋮</span>
                </a>

                <a href="https://drive.google.com/drive/folders/1bDkLO3M1Er7z33f5ckT8nrspubLRjWiB"
                    class="btn-linktree d-flex justify-content-between rounded-pill mb-3 shadow p-3">
                    <span class="mx-auto">PARTICIPANT'S NEEDS RPC 2026</span>
                    <span class="">⋮</span>
                </a>

                <a href="https://docs.google.com/spreadsheets/d/1-3_3BEdPkFh1W88SycYzT5atoMW4RPVZtqnhY9OCqzA/edit?gid=0#gid=0"
                    class="btn-linktree d-flex justify-content-between rounded-pill mb-3 shadow p-3">
                    <span class="mx-auto">FAQ RPC 2026</span>
                    <span class="">⋮</span>
                </a>

                <a href="https://api.whatsapp.com/send/?phone=62881036682382&text&type=phone_number&app_absent=0"
                    class="btn-linktree d-flex justify-content-between rounded-pill mb-3 shadow p-3">
                    <span class="mx-auto">CONTACT PERSON RPC 2026</span>
                    <span class="">⋮</span>
                </a>

            </div>

            <button class="btn btn-primary mb-3 rounded-pill" onclick="showme()">Show Me</button>
            <button class="btn btn-primary mb-3 rounded-pill" onclick="changeText()">Change Text</button>
            <button class="btn btn-primary mb-3 rounded-pill" onclick="changeStyle()">Change Style</button>

            <div class="footer-links mt-auto mb-5">
                <a href="#">Cookie Preferences</a> &middot;
                <a href="#">Report</a> &middot;
                <a href="#">Privacy</a> &middot;
                <a href="#">Explore</a>
            </div>
        </div>
        <script>
            feather.replace();
        </script>
    </div>

</body>

</html>
