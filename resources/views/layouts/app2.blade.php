<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>InovasiDigital - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="{{ asset('template/flexstart/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('template/flexstart/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/flexstart/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('template/flexstart/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/flexstart/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template/flexstart/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('template/flexstart/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('template/flexstart/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/flexstart/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('template/flexstart/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template/flexstart/assets/css/style.css') }}" rel="stylesheet">

  <link href="{{ asset('template/flexstart/assets/css/variables.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('layouts.header')
  <!-- End Header -->
  @yield('content')
  <!-- Vendor JS Files -->
  <script src="{{ asset('template/flexstart/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('template/flexstart/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('template/flexstart/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/flexstart/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template/flexstart/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('template/flexstart/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('template/flexstart/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template/flexstart/assets/js/main.js') }}"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
    const worldMap = document.getElementById("worldMap");
    const tooltip = document.getElementById("tooltip");

    worldMap.addEventListener("mousemove", function(event) {
        const x = event.pageX - this.offsetLeft;
        const y = event.pageY - this.offsetTop;

        const pixel = getPixelColor(x, y, this);

        if (pixel[3] > 0) { // Jika piksel tidak transparan
            const countryName = getCountryName(pixel);
            tooltip.innerHTML = countryName;
            tooltip.style.left = x + 10 + "px";
            tooltip.style.top = y + 10 + "px";
            tooltip.style.display = "block";
        } else {
            tooltip.style.display = "none";
        }
    });

    function getPixelColor(x, y, image) {
        const canvas = document.createElement("canvas");
        const context = canvas.getContext("2d");

        canvas.width = image.width;
        canvas.height = image.height;

        context.drawImage(image, 0, 0, image.width, image.height);

        return context.getImageData(x, y, 1, 1).data;
    }

    function getCountryName(pixel) {
        // Implementasikan logika untuk mengembalikan nama negara
        // berdasarkan warna piksel atau posisi piksel di sprite.
        // Misalnya, dapat menggunakan koordinat piksel untuk memetakan
        // ke nama negara yang sesuai.
        // Contoh: if (pixel[0] === 255 && pixel[1] === 0 && pixel[2] === 0) return "Indonesia";
        return "Negara Tidak Dikenal";
    }
});

  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('a.scrollto').on('click', function(e) {
            e.preventDefault();

            var target = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 800); // Sesuaikan durasinya jika perlu
        });
    });
</script>


</body>

</html>