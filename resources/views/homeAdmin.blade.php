@extends('layout.appAdmin')
@section('title', 'Home')
@section('home', 'active')

@section('content')
    <div class="container mt-5 ">
        <div class="row align-content-center justify-content-between ">
            <div class="col-md-5">
                <h1>Hai <span class="green-lumut"> Selamat datang {{ Auth::User('admin')->nama_lengkap }}👋
                    </span></h1>
                <div class=" bg-primary p-3 bg-gradient text-white rounded-1 my-4">
                    <p>Maaf, kami tidak terlalu fokus untuk bagian tampilan page home. Segera melakukan perubahan <i
                            class="fas fa-circle-info"></i></p>
                </div>
            </div>
            <div class="col-md-5">
                @include('layout.iconAdmin2')
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>

    @include('sweetalert::alert')
    {{-- Sweet-alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"
        integrity="sha256-+0Qf8IHMJWuYlZ2lQDBrF1+2aigIRZXEdSvegtELo2I=" crossorigin="anonymous"></script>

    <script>
        let Logout = document.getElementById('Logout');
        Logout.addEventListener('click', confirm);

        function confirm(e) {
            e.preventDefault();
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
                    window.location.href = "{{ route('Admin.logout') }}";
                }
            })
        }
    </script>
@endsection
