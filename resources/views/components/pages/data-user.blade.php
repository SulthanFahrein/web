<head>
  @extends('components.template.layout')
  @section('judul', 'Data User')
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
  <link rel="stylesheet" href="{{ asset('assets/css/datauser.css') }}" />
  <br>
  <div class="card-body">
    <div class="table-responsive">
      <x-organism.o-user-table></x-organism.o-user-table>
    </div>

    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <x-organism.o-user-modal></x-organism.o-user-modal>
        </div>
      </div>
    </div>
  </div>
  @endsection
</body>