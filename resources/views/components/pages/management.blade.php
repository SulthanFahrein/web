<head>
  @extends('components.template.layout')
  @section('judul', 'Property Management')
  <link rel="icon" type="image/x-icon" href="assets/img/avatar/logo.jpg">
  @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
    $(function () {
      $("#properties").DataTable();
    });
    </script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="module" src="{{ asset('js/index.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet-src.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
      })
    }
    </script>
  @endpush
</head>

<body>
  @section('content')
  <link rel="stylesheet" href="{{ asset('assets/css/management.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/avatar/logo.jpg') }}">
  <link href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" rel="stylesheet">
  <main class="main users chart-page" id="skip-target">
    <div class="container">
      <x-organism.o-management-table></x-organism.o-management-table>
      <div class="modal fade" id="ModalAddProperty" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:0;">
          <x-organism.o-management-modal></x-organism.o-management-modal>
        </div>
      </div>
      <div class="modal fade" id="ModalEditProperty" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:0;">
          <x-organism.o-management-edit></x-organism.o-management-edit>
        </div>
      </div>
      <div class="modal fade" id="ModalImageProperty" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="top:0;">
          <x-organism.o-management-viewimg></x-organism.o-management-viewimg>
        </div>
      </div>
      <div class="modal fade" id="ModalZoom" tabindex="-1" aria-labelledby="ModalMantapLabel" aria-hidden="true">
        <div class="modal-dialog">
          <x-organism.o-management-zoom></x-organism.o-management-zoom>
        </div>
      </div>
    </div>
    @endsection
</body>