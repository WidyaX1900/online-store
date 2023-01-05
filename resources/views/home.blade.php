<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="stylesheet" href="{{ config('app.url').'/online-store/resources/css/bootstrap.css' }}" />
    <link rel="stylesheet" href="{{ config('app.url').'/online-store/resources/css/home.css' }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" href="{{ asset('storage/img/logo.png') }}">
  </head>
  <body>
    <!-- Navbar -->
    <nav id="navigation">
      <div class="brand-logo">
        <img src="{{ asset('storage/img/logo.png') }}" alt="brand logo" />
      </div>
      <div class="hamburger-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
      @if (Auth::user())
        <div class="cta-buttons">
          <p style="font-size: 1.5rem;" class="mt-3">
            <strong>Hi, {{ Auth::user()->name }}</strong>
          </p>
          <a href="/product" class="nav-link">Catalogue</a>
          <a href="/login/logout" class="nav-link">Logout</a>
        </div>        
        @else
        <div class="cta-buttons">
          <a href="/product" class="nav-link">Login</a>
          <button type="button">Register</button>
        </div>          
      @endif
    </nav>
    <!-- Menu links -->
    <div class="menu-link">
      <div class="login-container mb-4">
        <a href="/product" class="nav-link">Login</a>
      </div>
      <div class="register-container mb-3">
        <button type="button">Register</button>
      </div>
    </div>
    <!-- Hero Image -->
    <header
      class="hero vh-100 d-flex justify-content-center align-items-center"
    >
      <div class="hero-caption">
        <h1>Upgrade your lifestyle and become High Value Man</h1>
      </div>
    </header>
    <!-- End hero -->
    <!-- Our product section -->
    <section class="our-product row">
      <h1>Our Product</h1>
      <div
        class="col-sm-2 d-flex align-items-center justify-content-center product"
      >
        <p>Jacket</p>
      </div>
      <div
        class="col-sm-2 d-flex align-items-center justify-content-center product"
      >
        <p>Accesories</p>
      </div>
      <div
        class="col-sm-2 d-flex align-items-center justify-content-center product"
      >
        <p>Parfume</p>
      </div>
      <div
        class="col-sm-2 d-flex align-items-center justify-content-center product"
      >
        <p>T-Shirt</p>
      </div>
    </section>
    <!-- End our product -->
    <!-- Story section -->
    <section class="story row">
      <h1>Story</h1>
      <div class="col-sm-5 story-img">
        <img src="{{ asset('storage/img/man.jpg') }}" alt="story image" />
      </div>
      <div class="col-sm-7 desc">
        <p>
          We realized there’s so much man insecure about their looks. So we’re
          here to provide you with our product and increase your level as a man
          to become high value man. Become high value man will help you
          passionate on your life and achieve more achievement.
        </p>
      </div>
    </section>
    <!-- End Story -->
    <!-- Testimonial section -->
    <section class="testimonial">
        <h1>What they said</h1>
        <div id="carouselExampleInterval" class="carousel slide testi mt-3" data-bs-ride="carousel">
            <div class="carousel-inner sliders">
              <div class="carousel-item active testi-box" data-bs-interval="2000">
                <div class="box shadow p-3">
                  <div class="profile d-flex align-items-center">
                    <div class="profile-pic-1"></div>
                    <div class="username">
                      <h4>Robert Bert</h4>
                      <div class="star">
                        <span class="material-symbols-outlined">
                          grade
                        </span>
                        <span class="rate">
                          5
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="word">
                    <p>
                      "I love product from Be Gentle. They care about the quality and customer support. Will looking forward to buy their product other time."
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item testi-box" data-bs-interval="2000">
                <div class="box shadow p-3">
                  <div class="profile d-flex align-items-center">
                    <div class="profile-pic-2"></div>
                    <div class="username">
                      <h4>Marco Pollo</h4>
                      <div class="star">
                        <span class="material-symbols-outlined">
                          grade
                        </span>
                        <span class="rate">
                          4.5                          
                        </span> 
                      </div>
                    </div>
                  </div>
                  <div class="word">
                    <p>
                      "I can feel the masculinity after use their product. Bravo for Be Gentle."
                    </p>
                  </div>
                </div>
              </div>
              <div class="carousel-item testi-box" data-bs-interval="4000">
                <div class="box shadow p-3">
                  <div class="profile d-flex align-items-center">
                    <div class="profile-pic-3"></div>
                    <div class="username">
                      <h4>Ashina Marla</h4>
                      <div class="star">
                        <span class="material-symbols-outlined">
                          grade
                        </span>
                        <span class="rate">
                          4.8
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="word">
                    <p>
                      "Im a woman but i like their product. Their parfume makes me comfortable and peace."
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- End Testimonial -->
    <!-- Footer -->
    <footer class="mt-4 d-flex align-items-center justify-content-center">
      <p>Let's become High Value Man</p>
    </footer>
    <!-- End Footer -->
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"
  ></script>
  <script src="{{ config('app.url').'/online-store/resources/js/home.js' }}"></script>
</html>
