  <?php
  session_start();
  if(!isset($_SESSION['id'])){
      header('Location: login.php');
  }
  ?>


  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
      <link rel="stylesheet" href="CSS/sidebar.css">
      <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </head>
  <body>
      <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
          <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
            <h1 class="fs-4"><span class="bg-white text-dark rounded shadow px-2 me-2">190</span><span class="text-white">POLICIA</span></h1>
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fas fa-stream"></i></button>
          </div>
        
          <ul class="list-unstyled px-2">
            <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block fw-light"><i class="fas fa-home"></i> inicio</a></li>
            <li class=""><a href="presos.php" class="text-decoration-none px-3 py-2 d-block fw-light"><i class="fas fa-list"></i> presos</a></li>
            <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block fw-light"><i class="far fa-comment"></i> denuncie</a></li>
            <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block fw-light"><i class="fas fa-envelope-open-text"></i> avisos</a></li>
            <li class=""><a href="#" class="text-decoration-none px-3 py-2 d-block fw-light"><i class="fas fa-users"></i> agentes </a></li>
          </ul>
          <hr class="h-color mx-2">

        
        </div>
        
        <div class="content">
        <nav class="navbar navbar-expand-md navbar-light bg-black ">
    <div class="container-fluid">
      <div class="d-flex justify-content-between d-md-none d-block">
      <button class="btn px-1 py-0 open-btn me-2"><i class="fal fa-stream"></i></button>
      <a class="navbar-brand fs-4" href="#"><span class="bg-dark rounded px-2 py-0 text-white">POLICIA</span></a>
      </div>
      <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ">
          <li class="nav-item  d-flex justify-content-between bd-highlight mb-3"><a class="p-2 bd-highlight"  href="#">pagina inicial</a></li>
          <li class="nav-item d-flex flex-row bd-highlight mb-3"><a class="p-2 bd-highlight"  href="#">ocôrrencias</a></li>
          <li class="nav-item d-flex flex-row bd-highlight mb-3"><a class="p-2 bd-highlight"  href="#">ocôrrencias</a></li>
          <li class="nav-item d-flex flex-row bd-highlight mb-3"><a class="btn btn-outline-danger" href="logout.php">Sair</a></li>

  </ul>
        
      </div>
    </div>
  </nav>
  <div class="dashboard-content px-3 pt-4">
  <div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
      <div class="card">
        <div class="card-body">
      <h5 class="card-title">Quantidades De Presos Atuais</h5>
          <p class="card-text">aperte aqui nesse botão para ver cada preso .</p>
          <a href="#" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Quantidades De Detentos Atuais</h5>
          <p class="card-text">aperte aqui nesse botão para ver cada detento.</p>
          <a href="#" class="btn btn-primary">Ver</a>
        </div>
      </div>
    </div>
  </div>
  </div>


  </div>
        <!-- </div>
        <a class="btn btn-danger position-absolute top-0 end-0 d-block p-2"  href="verify/logout.php" id="sair">Sair da conta</a>
        <h1 class="position-absolute top-50 end-0 translate-middle-y font-weight-lightf text-success d-block p-2">Seja bem vindo <?php echo $_SESSION['nome']; ?></h1>       </div>
        </div>  -->
        <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script  src="JS/jquery-3.7.1.js"></script>
        <script  src="script.js"></script>
        

      













  <!-- <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table> -->
  </body>
  </html>