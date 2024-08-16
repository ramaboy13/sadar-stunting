<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sadar Stunting</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/app.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <!--Aos Animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .layanan {
            overflow: hidden;
            box-sizing: border-box;
            white-space: nowrap;
        }

        .layanan-content {
            display: flex;
            animation: layanan 25s linear infinite;
        }

        @keyframes layanan {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        .card-custom {
            flex: 0 0 auto;
            width: 300px;
            margin-right: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .card-icon {
            font-size: 50px;
            color: #17a2b8;
        }

        .card-title {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        .navbar-toggler.collapsed span {
            display: inline-block;
            transform: rotate(45deg);
        }

        .navbar-toggler.collapsed .navbar-toggler-icon {
            display: none;
        }

        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            letter-spacing: 1px;
            margin-left: 60px;
        }

        .collapse {
            margin-right: 50px;
            gap: 2rem;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: #ffffff;
            text-decoration: none;
        }

        .navbar-nav .nav-link:hover::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #ffffff;
            left: 0;
            bottom: -1px;
            transform: scaleX(0);
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .navbar-nav .nav-link:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        /*Hero Section*/
        .imganak {
            width: 1000px;
            height: 500px;
            border-radius: 5%;
        }

        .marquee {
            display: flex;
            overflow: hidden;
            white-space: nowrap;
            animation: marquee 15s linear infinite;
            filter: grayscale(1);
        }

        .marquee:hover {
            filter: grayscale(0);
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        /* Media query untuk handphone */
        @media (max-width: 768px) {
            .marquee {
                display: none;
            }
        }


        /* CSS untuk tombol navigasi gambar */
        .btn-icon {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .btn-icon:hover {
            background-color: rgba(0, 0, 0, 0.7);
        }

        /* Tampilkan tombol hanya saat gambar di-hover */
        .img-container:hover .btn-icon {
            opacity: 1;
        }

        /* Animasi Fade In dan Fade Out untuk gambar */
        .fade-out {
            opacity: 0;
            transition: opacity 0.5s ease-out;
        }

        .fade-in {
            opacity: 1;
            transition: opacity 0.5s ease-in;
        }

        .stuntku {
            width: 100%;
            height: 403px;

        }
    </style>

</head>

<body>
    <main>
        {{ $slot }}
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggler = document.getElementById("navbar-toggler");
            const navbarNav = document.getElementById("navbarNav");

            toggler.addEventListener("click", function() {
                // Toggle the 'show' class to open or close the menu
                navbarNav.classList.toggle("show");

                // Toggle between hamburger and cross icon
                if (navbarNav.classList.contains("show")) {
                    toggler.innerHTML = '<span>&#x2715;</span>'; // Cross icon (×)
                } else {
                    toggler.innerHTML = '<span class="navbar-toggler-icon"></span>'; // Hamburger icon
                }
            });
        });


        // JavaScript untuk navigasi gambar
        const images = [
            "../assets/anak1.jpeg",
            "../assets/anak2.jpeg",
            "../assets/anak3.jpeg"
        ];
        let currentIndex = 0;
        let autoSlideInterval;

        document.getElementById('slideLeft').addEventListener('click', function() {
            slideLeft();
        });

        document.getElementById('slideRight').addEventListener('click', function() {
            slideRight();
        });

        function slideLeft() {
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : images.length - 1;
            slideImage();
            restartAutoSlide();
        }

        function slideRight() {
            currentIndex = (currentIndex < images.length - 1) ? currentIndex + 1 : 0;
            slideImage();
            restartAutoSlide();
        }

        function slideImage() {
            const imgElement = document.getElementById('imgSlide');
            imgElement.classList.add('fade-out');

            setTimeout(() => {
                imgElement.src = images[currentIndex];
                imgElement.classList.remove('fade-out');
                imgElement.classList.add('fade-in');
            }, 500);

            setTimeout(() => {
                imgElement.classList.remove('fade-in');
            }, 1000);
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(() => {
                slideRight();
            }, 2500); // Mengubah gambar setiap 0.5 detik
        }

        function restartAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }

        function MessageToWhatsapp() {
            const urlToWhatsapp =
                `https://wa.me/+6285775242278?text=Halo nama saya, ${namaDepan.value}, ${namaBelakang.value}, ${pesan.value}`;

            window.open(urlToWhatsapp, "_blank");
        }
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
