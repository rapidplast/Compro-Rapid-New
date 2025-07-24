@if(auth()->check())
    @include('layouts.navbar_admin')
@else
    @include('layouts.navbar')
@endif

<!-- Product Style navbar kedua -->
<nav class="product-nav">
    <div class="product-nav-container">
        <div class="product-nav-title">Product</div>
        <div class="product-nav-links">
            <a href="#knowledge" class="product-link">Knowledge Through Experience</a>
            <a href="#product" class="product-link">Products & Service</a>
            <a href="#board" class="product-link">Broad Selection</a>
        </div>
    </div>
</nav>

@section('title')
    Product
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
<div id="preloader">
    <img src="{{ asset('/assets/images/logo.png') }}" alt="Loading...">
</div>

<section id="on-top">
    <div class="one-stop" style="background-image: url('{{ asset('assets/images/about_us/company.jpeg') }}'); background-size: cover; background-position: center; margin-top: 80px;">
        <div class="text-img">
            <h3><b><span style="color: white;">ONE - STOP RIGID </span></b></h3>
            <h3><b><span style="color: red;">PACKAGING SOLUTION</span></b></h3>
            <p class="first-text m-0"><span style="color: white;">Our Board of Directors and Management team consists of seasoned </p>
            <p class="second-text p-0"><span style="color: white;">professionals with extensive experience in the rigid plastic packaging industry under the leadership of ...... and ......</p>
        </div>
    </div>
</section>

<section id="knowledge" style="background-color: #EAE2E6;">
    <div class="knowledge">
        <h3><b><i>KNOWLEDGE THROUGH <span style="color: red;">EXPERIENCE</span></i></b></h3>
        <p style="padding: 50px;">With over 60 years of experience in plastics processing, we bring deep expertise in customer consultation. From design and material selection to the right production technology, we partner with our clients to create competitive, high-quality, and visually appealing packaging solutions.</p>
    </div>
</section>

<section style="background-color: #EAE2E6;">
    <div class="img-des">
        <div class="container text-center">
            <div class="row align-items-center">
              <div class="col">
                <img class="cp" style="width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/about_us/visi.png')}}" alt="">
              </div>
              <div class="col des-1">
                <b><h5><i>CONSUMER <span style="color: red;">PACKAGING</span></i></h5></b>
                <p>We service customers in producing a wide range of plastic packaging applications for personal care, food and beverage, homecare, and pharmaceutical products.
                   Variety of product formats including bottles (blow and extruded blow), caps and closures, jars, tube, and toothbrush.
                </p>
              </div>
            </div>
        </div>
        <div class="container text-center p-5">
            <div class="row align-items-center">
              <div class="col des-2">
                <b><h5><i>INDUSTRIAL <span style="color: red;">PACKAGING</span></i></h5></b>
                <p>Industrial packaging products for lubricants, chemicals, paints, and other liquid across wide range container sizes.
                    Safe and strong packaging catered to variety of product contents with long shelf life.
                </p>
              </div>
              <div class="col">
                <img class="ip" style="width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/about_us/visi.png')}}" alt="">
              </div>
            </div>
        </div>
        <div class="container text-center P-5">
            <div class="row align-items-center">
              <div class="col">
                <img class="pd" style="width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/about_us/visi.png')}}" alt="">
              </div>
              <div class="col des-3">
                <b><h5><i>PRODUCT <span style="color: red;">DESIGN</span></i></h5></b>
                <p>Our creative designers develop the ideal design concept for the respective market. From the very first sketches, the focus is on technical feasibility in addition to the shape, colour and feel. has implemented thousands of designs over the course of six decades. From conceptual designs to traditional technical designs, we cover the entire range of services.
                </p>
              </div>
            </div>
        </div>
    </div>
</section>

<section id="product" class="product m-0">
    <i>
        <h4 style="margin-top: -70px;" class="ptext-product">PRODUCT <span style="color: red; font-size: 26px"> & SERVICE</span></h4>
    </i>
    <div class="container text-center">
        <div class="d-flex flex-wrap justify-content-md-between justify-content-center" style="gap: 90px; padding-top: 100px;">
                <div class="card-product shadow-lg" style="width: 15rem;">
                    <div class="card-body-product">
                        <div class="container text-start" style="margin-top: 30px">
                            <div class="row align-items-start">
                                <div class="col">
                                    <div class="box">
                                        <i class="bi bi-box-seam-fill"
                                            style="margin-left: 10px; font-size: 25px; color: rgb(255, 12, 12);">
                                        </i>
                                    </div>
                                </div>
                                <div class="col" style="margin-left: -100px; font-size: 14px; font-weight: bold;">
                                    Tube Packaging
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('assets/images/home/botol.jpeg') }}" style="width: 100%; height: 110px; margin-top: 10%;" alt="">
                        <p style="padding: 10px;">Plastic containers are the packaging of choice for a wide range of household needs,
                             including personal care products, food & beverages, medicines, and cleaning tools.
                        </p>
                    </div>
                </div>
                <div class="card-product shadow-lg" style="width: 15rem;">
                    <div class="card-body-product">
                        <div class="container text-start" style="margin-top: 30px">
                            <div class="row align-items-start">
                                <div class="col">
                                    <div class="box">
                                        <i class="bi bi-box-seam"
                                            style="margin-left: 10px; font-size: 25px; color: rgb(255, 1, 1);"></i>
                                    </div>
                                </div>
                                <div class="col" style="margin-left: -100px; font-size: 14px; font-weight: bold;">
                                    Tube Packaging
                                </div>
                            </div>
                        </div>
                        <img src="{{asset('assets/images/home/tub.jpeg')}}" style="width: 100%; height: 110px; margin-top: 10%;"
                            alt="">
                        <p style="padding: 10px;">Tube packaging is ideal for thick liquids and pastes,
                             including industrial chemicals, automotive products, medical ointments, and artistic pigments.</p>
                    </div>
                </div>
                <div class="card-product shadow-lg" style="width: 15rem;">
                    <div class="card-body-product">
                        <div class="container text-start" style="margin-top: 30px">
                            <div class="row align-items-start">
                                <div class="col">
                                    <div class="box">
                                        <i class="bi bi-motherboard"
                                            style="margin-left: 10px; font-size: 25px; color: rgb(255, 0, 0);"></i>
                                    </div>
                                </div>
                                <div class="col" style="margin-left: -100px; font-size: 14px; font-weight: bold;">
                                    Tube Packaging
                                </div>
                            </div>
                        </div>
                        <img src="{{asset('assets/images/home/cek.jpg')}}" style="width: 100%; height: 110px; margin-top: 10%;"
                            alt="">
                        <p style="padding: 10px;">An essential component of plastic packaging for packing home goods,
                            personal care products, and groceries.</p>
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="safety" style="background-color: #EAE2E6;">
    <h5 style="font-size: 28px;  margin: 10px 0;">
        Food Safety, Quality,  <span class="highlight" style="font-size: 28px; font-weight: bold; color: red;">OHS and Environment Policy</span>
    </h5>
    <div class="d-flex flex-column mt-5 p-5">
        <div class="d-flex flex-wrap justify-content-between ">
            <div class="w-50 d-flex flex-md-row flex-column justify-content-start p-2">
                <div style="width: 100%; max-width: 150px">
                    <img src="{{asset('assets/images/home/icon1.png')}}" style="width: 100%;" alt="">
                </div>
                <div class="text-start">
                    <b class="highlight">QUALITY</b>
                    <p>Create products with high quality</p>
                </div>
            </div>
            <div class="w-50 d-flex flex-md-row flex-column justify-content-start p-2">
                <div style="width: 100%; max-width: 150px">
                    <img src="{{ asset('assets/images/home/icon2.png') }}" style="width: 100%; margin-top: -30px;" alt="">
                </div>
                <div class="text-start">
                    <b class="highlight">PACKAGING SAFETY</b>
                    <p>Creating safe packaging products</p>
                </div>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-content-between ">
            <div class="w-50 d-flex flex-md-row flex-column justify-content-start p-2 gap-3">
                <div style="width: 100%; max-width: 150px">
                    <img src="{{asset('assets/images/home/icon3.png')}}" style="width: 60%;" alt="">
                </div>
                <div class="text-start">
                    <b class="highlight">QUALITY</b>
                    <p class="text-wrap">Ensure the production process of
                        production process and non-production of
                        hygienic food production process starting from
                        receipt of raw materials until distribution</p>
                </div>
            </div>
            <div class="w-50 d-flex flex-md-row flex-column justify-content-start p-2 gap-3">
                <div style="width: 100%; max-width: 150px">
                    <img src="{{asset('assets/images/home/icon4.png')}}" style="width: 60%;" alt="">
                </div>
                <div class="text-start">
                    <b class="highlight">QUALITY</b>
                    <p class="text-wrap">Creating a safe and healthy work environment in accordance with applicable laws and regulations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="board" style="background-color: #EAE2E6;">
    <div class="bottles">
        <b ><h4 class="m-0">A BROAD SELECTION OF <span style="color: red">STANDARDIZED PRODUCTS</span></h4></b>
    </div>
    <div class="bottles-img position-relative" style="overflow: hidden; height: 500px;">
        <!-- Gambar Background -->
        <img src="{{asset('assets/images/bottle.png')}}" alt="Bottles"
             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0; opacity: 0.5;">

        <!-- Teks Overlay -->
        <div class="position-absolute" style="bottom: 40px; left: 60px; z-index: 1; color: white; text-align: left;">
            <h1 style="font-weight: bold; font-size: 48px; margin: 0;">BOTTLES</h1>
            <p style="font-weight: bold; font-size: 20px; margin: 5px 0 0;">HDPE, LDPE, PP, 6-layer Coex, PET, PET-G</p>
        </div>
    </div>
</section>

<section id="" style="background-color: #EAE2E6;">
    <div class="last-text">
        <h5 class="m-0">Throughout the years, the RAPID PLAST group has
            established an extensive collection of standardized
            packaging. Through our Standard Product Catalog, 
            we offer over 600 standard packaging solutions for our clients."
        </h5>
        <button type="button" class="btn btn-secondary" style="margin-top: 60px; width: 540px;">Product Catalogue Rapid Plast</button>
    </div>
</section>

@include('layouts.footer')

<script>
  document.addEventListener("DOMContentLoaded", function() {
  const elements = document.querySelectorAll('.fade-in-up');

  function checkPosition() {
      elements.forEach(element => {
          const position = element.getBoundingClientRect().top;
          const windowHeight = window.innerHeight;

          if (position < windowHeight - 50) {
              element.classList.add('show');
          }
      });
  }

  window.addEventListener('scroll', checkPosition);
  checkPosition();
});
</script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      setTimeout(() => {
          document.getElementById('preloader').style.display = 'none';
          document.getElementById('content').style.display = 'block';
      }, 300);

      const elements = document.querySelectorAll('.fade-in-up');

      function checkPosition() {
          elements.forEach(element => {
              const position = element.getBoundingClientRect().top;
              const windowHeight = window.innerHeight;

              if (position < windowHeight - 50) {
                  element.classList.add('show');
              }
          });
      }

      window.addEventListener('scroll', checkPosition);
      checkPosition();
  });
</script>

<script>
    // Script untuk navbar Product style dengan penyesuaian otomatis
    document.addEventListener('DOMContentLoaded', function() {
        const mainNavbar = document.querySelector('.navbar'); 
        const secondaryNavbar = document.querySelector('.product-nav');
        
        // Fungsi untuk mengatur posisi navbar kedua
        function adjustSecondaryNavbar() {
            if (mainNavbar && secondaryNavbar) {
                const mainNavbarHeight = mainNavbar.offsetHeight;
                secondaryNavbar.style.top = mainNavbarHeight + 'px';
            }
        }
        
        // Panggil saat load dan resize
        adjustSecondaryNavbar();
        window.addEventListener('resize', adjustSecondaryNavbar);
        
        // Script scroll yang sudah diperbaiki
        let lastScrollTop = 0;
        
        window.addEventListener('scroll', function () {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const mainNavbarHeight = mainNavbar ? mainNavbar.offsetHeight : 90;
            
            if (scrollTop > lastScrollTop) {
                // Scroll down -> hide navbar
                secondaryNavbar.style.top = "-70px";
            } else {
                // Scroll up -> show navbar
                secondaryNavbar.style.top = mainNavbarHeight + "px";
            }
            
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });
    });
</script>