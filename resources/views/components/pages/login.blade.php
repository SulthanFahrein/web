<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/img/avatar/logo.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/logins/login-9/assets/css/login-9.css">
  <title>Qirby Admin | Login</title>
  <link rel="shortcut icon" href="./img/svg/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/login.css')}}">
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
  <div class="page-flex">
    <section class="bg-primary py-3 py-md-5 py-xl-8">
      <div class="container">
        <div class="row gy-4 align-items-center">
          <div class="col-12 col-md-6 col-xl-7">
            <div class="d-flex justify-content-center">
              <img class="img-fluid rounded mb-4" loading="lazy" src="assets/img/logo.svg" width="245" height="100"
                alt="Logo Qirby">
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-5">
            <div class="card border-0 rounded-4">
              <div class="card-body p-3 p-md-4 p-xl-5 login-form">
                <div class="mb-4 text-center text-md-start">
                  <h3 style="font-weight:bold; text-align: center;">Login</h3>
                </div>
                <x-organism.o-login></x-organism.o-login>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @include('components.template.script')
</body>