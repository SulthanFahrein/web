<head>
    @extends('components.template.layout')
    @section('judul', 'Profile Admin')
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function updateSave() {
                Swal.fire({
                    title: "Success!",
                    text: "{{ session('success') }}",
                    icon: "success"
                });
            }
        </script>
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
        <link rel="icon" type="image/x-icon" href="assets/img/avatar/logo.jpg">
    @endpush
</head>

<body>
    @section('content')
    <main class="pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <x-organism.o-admin-form></x-organism.o-admin-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @endsection
</body>