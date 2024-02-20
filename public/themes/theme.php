<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My page</title>
    <!-- Bootstrap core CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <style>
		html, body
		{
			width:100%;
			height:100%;
		}
    </style>
  <style id="vvvebjs-styles"></style></head>
  <body>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Bootstrap 5 start page</h1>
          <p class="lead">Start by dragging components to page or double click to edit text</p>
        </div>
      </div>
    </div>
  

<header class="slider" data-name="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-bs-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>

<style>
.carousel-item {
  height: 100vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
</header><section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
              <div class="card text-black">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-product-cards/img1.webp" class="card-img-top" alt="iPhone">
                <div class="card-body">
                  <div class="text-center mt-1">
                    <h4 class="card-title">iPhone X</h4>
                    <h6 class="text-primary mb-1 pb-3">Starting at $399</h6>
                  </div>

                  <div class="text-center">
                    <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                      <h5 class="mb-0">Quick Look</h5>
                    </div>

                    <div class="d-flex flex-column mb-4">
                      <span class="h1 mb-0">5.8″</span>
                      <span>Super Retina HD display1</span>
                    </div>

                    <div class="d-flex flex-column mb-4">
                      <span class="h1 mb-0">
                        <i class="fas fa-camera-retro"></i>
                      </span>
                      <ul class="list-unstyled mb-0">
                        <li aria-hidden="true">—</li>
                        <li>Wide</li>
                        <li>Telephoto</li>
                        <li aria-hidden="true">—</li>
                      </ul>
                    </div>

                    <div class="d-flex flex-column mb-4">
                      <span class="h1 mb-0">2x</span>
                      <span>Optical zoom range</span>
                    </div>

                    <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                      <h5 class="mb-0">Capacity</h5>
                    </div>

                    <div class="d-flex flex-column mb-4 lead">
                      <span class="mb-2">64GB</span>
                      <span class="mb-2">256GB</span>
                      <span style="color: transparent;">0</span>
                    </div>
                  </div>

                  <div class="d-flex flex-row">
                    <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                      Learn more
                    </button>
                    <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
              <div class="card text-black">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-product-cards/img2.webp" class="card-img-top" alt="iPhone">
                <div class="card-body">
                  <div class="text-center mt-1">
                    <h4 class="card-title">iPhone 11</h4>
                    <h6 class="text-primary mb-1 pb-3">Starting at $499</h6>
                  </div>

                  <div class="text-center">
                    <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                      <h5 class="mb-0">Quick Look</h5>
                    </div>

                    <div class="d-flex flex-column mb-4">
                      <span class="h1 mb-0">6.1″</span>
                      <span>Liquid Retina HD display1</span>
                    </div>

                    <div class="d-flex flex-column mb-4">
                      <span class="h1 mb-0">
                        <i class="fas fa-camera-retro"></i>
                      </span>
                      <ul class="list-unstyled mb-0">
                        <li aria-hidden="true">Ultra Wide</li>
                        <li>Wide</li>
                        <li aria-hidden="true">—</li>
                        <li aria-hidden="true">—</li>
                      </ul>
                    </div>

                    <div class="d-flex flex-column mb-4">
                      <span class="h1 mb-0">2x</span>
                      <span>Optical zoom range</span>
                    </div>

                    <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                      <h5 class="mb-0">Capacity</h5>
                    </div>

                    <div class="d-flex flex-column mb-4 lead">
                      <span class="mb-2">64GB</span>
                      <span class="mb-2">128GB</span>
                      <span>256GB</span>
                    </div>
                  </div>

                  <div class="d-flex flex-row">
                    <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                      Learn more
                    </button>
                    <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
              <div class="card text-black">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-product-cards/img3.webp" class="card-img-top" alt="iPhone">
                <div class="card-body">
                  <div class="text-center mt-1">
                    <h4 class="card-title">iPhone 11 Pro</h4>
                    <h6 class="text-primary mb-1 pb-3">Starting at $599</h6>
                  </div>

                  <div class="text-center">
                    <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                      <h5 class="mb-0">Quick Look</h5>
                    </div>

                    <div class="d-flex flex-column mb-4">
                      <span class="h1 mb-0">5.8″</span>
                      <span>Super Retina HD display1</span>
                    </div>

                    <div class="d-flex flex-column mb-4">
                      <span class="h1 mb-0">
                        <i class="fas fa-camera-retro"></i>
                      </span>
                      <ul class="list-unstyled mb-0">
                        <li aria-hidden="true">Ultra Wide</li>
                        <li>Wide</li>
                        <li>Telephoto</li>
                        <li aria-hidden="true">—</li>
                      </ul>
                    </div>

                    <div class="d-flex flex-column mb-4">
                      <span class="h1 mb-0">4x</span>
                      <span>Optical zoom range</span>
                    </div>

                    <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                      <h5 class="mb-0">Capacity</h5>
                    </div>

                    <div class="d-flex flex-column mb-4 lead">
                      <span class="mb-2">64GB</span>
                      <span class="mb-2">256GB</span>
                      <span>512GB</span>
                    </div>
                  </div>

                  <div class="d-flex flex-row">
                    <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                      Learn more
                    </button>
                    <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section></body></html>