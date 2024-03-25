@extends('layout.app')
@section('title', 'Home')
@section('home', 'active')
@section('content')
    <div class="row align-content-center justify-content-between ">
        <div class="col-md-5">
            <h1>Hai <span class="green-lumut"> Selamat datang {{ Auth::User()->nama_depan }}
                    {{ Auth::User()->nama_belakang }}👋 </span></h1>
            <div class=" bg-primary p-3 bg-gradient text-white rounded-1 my-4">
                <p>Maaf, kami tidak terlalu fokus untuk bagian tampilan page home. Segera melakukan perubahan <i
                        class="fas fa-circle-info"></i></p>
            </div>
        </div>
        <div class="col-md-5">
            @include('layout.iconUpdate')
        </div>
    </div>
@endsection

@section('scripts')
    {{-- Sweet-alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"
        integrity="sha256-+0Qf8IHMJWuYlZ2lQDBrF1+2aigIRZXEdSvegtELo2I=" crossorigin="anonymous"></script>

    @include('sweetalert::alert')

    <script>
        let Logout = document.getElementById('Logout');
        Logout.addEventListener('click', confirm);

        function confirm(e) {
            e.preventDefault();
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
                    window.location.href = "{{ route('logout') }}";
                }
            })
        }
    </script>
@endsection
