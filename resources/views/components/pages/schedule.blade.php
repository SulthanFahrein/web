<head>
    @extends('components.template.layout')
    @section('judul', 'Schedule')
    <link rel="icon" type="image/x-icon" href="assets/img/avatar/logo.jpg">
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('template/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
        <script>
            $(function () {
                $("#example1").DataTable();
            });
        </script>

        <script>
            function confirmDelete() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                })
            }
        </script>
    @endpush
</head>

<body>
    @section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/schedule.css') }}" />
    <div class="card-body">
        <div class="table-responsive">

            <x-organism.o-schedule-table></x-organism.o-schedule-table>
        </div>

        <div class="modal fade" id="modal-lihat-detail-jadwal-" tabindex="-1" role="dialog"
            aria-labelledby="modal-lihat-detail-jadwal--label" aria-hidden="true">
            <x-organism.o-schedule-moddetail></x-organism.o-schedule-moddetail>
        </div>

        <div class="modal fade" id="modal-lihat-detail-jadwal-done" tabindex="-1" role="dialog"
            aria-labelledby="modal-lihat-detail-jadwal--label" aria-hidden="true">
            <x-organism.o-schedule-done></x-organism.o-schedule-done>
        </div>

        <div class="modal fade" id="modal-lihat-detail-jadwal-reject" tabindex="-1" role="dialog"
            aria-labelledby="modal-lihat-detail-jadwal--label" aria-hidden="true">
            <x-organism.o-schedule-reject></x-organism.o-schedule-reject>
        </div>
    </div>
    @endsection
</body>