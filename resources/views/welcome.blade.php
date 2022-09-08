<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OKE Garden</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <style>
            .rdp {
                --rdp-cell-size: 75px !important;
                --rdp-accent-color: #43B5FF !important;
                --rdp-background-color: #e7edff !important;
                --rdp-outline: 1px solid var(--rdp-accent-color) !important; 
                margin: auto !important;
            }
            .nav a{
                color: #64676A;
            }
            .nav>li>a:hover,
            .nav>li>a:focus{
                color: black;
            }
        </style>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


        @viteReactRefresh
        @vite('resources/js/app.jsx')
    </head>
    <body>
        <header class="p-3 border-bottom shadow-lg-3">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <a href="#" class="d-flex align-items-center col-sm-2">
                    <img src="images/OKEgardenlogo.png" alt="okegarden-logo" class="img-fluid">
                    {{-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> --}}
                </a>

                <ul class="nav justify-content-center fw-semibold fs-4 gap-2">
                    <li><a href="#" class="nav-link px-3  ">Beranda</a></li>
                    <li>
                        <a href="#" class="nav-link px-3  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">Layanan</a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item active" href="#" aria-current="page">Konsultasi Taman</a></li>
                            <li><a class="dropdown-item" href="#">Layanan 2</a></li>
                            <li><a class="dropdown-item" href="#">Layanan 3</a></li>
                            <li><a class="dropdown-item" href="#">Layanan 4</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Layanan Spesial 1</a></li>
                            <li><a class="dropdown-item" href="#">Layanan Spesial 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="#">Blog 1</a></li>
                            <li><a class="dropdown-item" href="#">Blog 2</a></li>
                            <li><a class="dropdown-item" href="#">Blog 3</a></li>
                            <li><a class="dropdown-item" href="#">Blog 4</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Blog Spesial 1</a></li>
                            <li><a class="dropdown-item" href="#">Blog Spesial 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3  dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">Mitra</a>
                        <ul class="dropdown-menu text-small shadow">
                            <li><a class="dropdown-item" href="#">Mitra 1</a></li>
                            <li><a class="dropdown-item" href="#">Mitra 2</a></li>
                            <li><a class="dropdown-item" href="#">Mitra 3</a></li>
                            <li><a class="dropdown-item" href="#">Mitra 4</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Mitra Spesial 1</a></li>
                            <li><a class="dropdown-item" href="#">Mitra Spesial 2</a></li>
                        </ul>
                    </li>
                </ul>

                <a href="#" class="d-block link-dark">
                    <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50" class="rounded-circle">
                </a>
            </div>
        </header>
        <div class='container-fluid isi px-5 py-3 bg-light'>
            <form method="POST" action="/konsultasi">
                @csrf
                <div class="my-5 text-center text-dark">
                    <h1 class="display-5 fw-semibold">Konsultasi Taman</h1>
                    <p class="lead mb-4">klik di bawah ini untuk memilih tanggal & waktu yang tersedia untuk memanggil konsultan kami</p>
                </div>
                <div class="d-grid gap-4 mx-3" style="grid-template-columns: 5fr 7fr;">
                    <div class="bg-white border border-2 rounded-3">
                        <div id="date-picker" class="d-flex justify-content-center w-100 h-100 fs-3"></div>
                    </div>
                    <div class="bg-white border border-2 rounded-3 p-5">
                        <div id="picked-header">
                            <div id="day-picked"></div>
                            <div id="date-picked"></div>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
                {{-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> --}}
            </form>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    function dayTrigger(){
        $(".rdp-day").on("click", function(){
            
            let date = $(this).attr("aria-label");
            let year = $(".rdp-caption_label").text().split(" ")[1];

            const dateSplitted = date.split(" ");

            const dayPicked = dateSplitted[2].slice(1,-1);
            const datePicked = dateSplitted[1] + " " + dateSplitted[0].slice(0,-2) + ", " + year;

            $("#day-picked").html(dayPicked);
            $("#date-picked").html(datePicked);
        })
    }
    function monthTrigger(){
        $(".rdp-nav_button").on("click", function(){
            setTimeout(function(){
                dayTrigger();
            },50);
        })
    }
    $(window).on('load', function() {
        let date = $('.rdp-day_selected').attr("aria-label")
        let year = $(".rdp-caption_label").text().split(" ")[1];

        var dateSplitted = date.split(" ");

        var dayPicked = dateSplitted[2].slice(1,-1);
        var datePicked = dateSplitted[1] + " " + dateSplitted[0].slice(0,-2) + ", " + year;
        console.log('test');
        $("#day-picked").html(dayPicked);
        $("#date-picked").html(datePicked);

        dayTrigger();
        monthTrigger();
    });
</script>