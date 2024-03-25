<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome - Programming</title>
    <link rel="shortcut icon" href="{{ asset('img/programming-language.png') }}" type="image/x-icon">

    {{-- Style-Mdb-Bootstrap --}}
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css" rel="stylesheet" />

    {{-- Style-Css --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>

    @include('layout.navbar')
    <main>
        <div class="container mt-5">
            <div class="row align-content-center justify-content-between">
                <div class="col-md-6">
                    <h1 class="green-lumut text-uppercase fw-bold ">
                        Web Programming
                    </h1>
                    <p class="text-uppercase fw-bold text-xl green-lumut-2 ">
                        Muhammad Ramadhan Syah Putra
                    </p>
                    <h2 class="display-6  text-uppercase fw-bold mb-4 font-italic green-lumut-2"><b>Sistem</b>
                        <br class=" d-none d-md-none">
                        <span id="typed"></span>
                    </h2>
                    <p class="green-lumut-2 fw-bold">
                        <i>
                            Hi, I'm Muhammad Ramadhan Syah Putra, a student at Batam State Polytechnic. I want Building
                            relationships and sharing the outcomes of my source code project~
                        </i>
                    </p>
                </div>
                <div class=" col-md-5 position-relative">
                    <div class=" d-block w-100 h-100 position-absolute top-0 ">
                        @include('layout.iconWelcome')
                    </div>
                    <div class="d-block w-auto h-auto" style="width: 200px">
                        @include('layout.oval')
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('layout.footer')
    @include('sweetalert::alert')

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <!-- typed js     -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    {{-- Sweet-alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"
        integrity="sha256-+0Qf8IHMJWuYlZ2lQDBrF1+2aigIRZXEdSvegtELo2I=" crossorigin="anonymous"></script>

    <script>
        var typed = new Typed('#typed', {
            strings: ['Double Authentication', '<span>Login user dan admin</span>'],
            typeSpeed: 100,
            backSpeed: 200,
            loop: true,
        });


        let Logout = document.getElementById('Logout');
        Logout.addEventListener('click', confirm);

        function confirm(e) {
            e.preventDefault();

            const href = e.target.getAttribute('href');

            if (href === '{{ route('Admin.logout') }}') {
                Swal.fire({
                    title: 'Apakah yakin ingin keluar admin?🤔',
                    text: 'Akun anda ' + e.target.getAttribute('data-name') + ' akan terkeluar dari page Home!',
                    icon: 'info',
                    showCancelButton: true,
                    cancelButtonColor: '#6c757d',
                    confirmButtonColor: '#dc3545',
                    confirmButtonText: 'Ya, keluar!',
                    reverseButtons: true,
                }).then((result) => {
                    if (result.value) {
                        window.location.href = href;
                    }
                })
            } else if (href === '{{ route('logout') }}') {
                Swal.fire({
                    title: 'Apakah yakin ingin keluar?🤔',
                    text: 'Akun ' + e.target.getAttribute('data-name') + ' akan terkeluar dari page Home!',
                    icon: 'info',
                    showCancelButton: true,
                    cancelButtonColor: '#6c757d',
                    confirmButtonColor: '#dc3545',
                    confirmButtonText: 'Ya, keluar!',
                    reverseButtons: true,
                }).then((result) => {
                    if (result.value) {
                        window.location.href = href;
                    }
                })
            }

        }
    </script>
</body>

</html>
