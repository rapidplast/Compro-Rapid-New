@if(auth()->check())
    @include('layouts.navbar_admin')
@else
    @include('layouts.navbar')
@endif

<nav class="product-nav">
    <div class="product-nav-container">
        <div class="product-nav-title">Product</div>
        <div class="product-nav-links">
            <a href="#knowledge" class="product-link">Knowledge Through Experience</a>
            <a href="#product" class="product-link">Products & Service</a>
            <a href="#board" class="product-link">Broad Selection</a>
            <a href="#product-showcase" class="product-link">Product Showcase</a>
            <a href="#clients-section" class="product-link">Our Clients</a>
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
    <div class="one-stop" style="background-image: url('{{ asset('assets/images/home/worker.jpg') }}'); background-size: cover; background-position: center 64%; margin-top: 100px;">
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
        <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
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

<section id="product" class="product m-0" style="background-image: url('{{ asset('assets/images/home/product.jpeg') }}');">
    <i>
        <h4 style="color: black;margin-top: -70px;" class="ptext-product">PRODUCT <span style="color: red; font-size: 26px"> & SERVICE</span></h4>
        <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
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
                        <img src="{{asset('assets/images/home/botol.jpeg')}}" style="width: 100%; height: 110px; margin-top: 10%;" alt="">
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
        <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
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

<!-- Bottles Section -->
<section id="board" style="background-color: #EAE2E6;">
    <div class="bottles">
        <b><h4 class="m-0">A BROAD SELECTION OF <span style="color: red">STANDARDIZED PRODUCTS</span></h4></b>
        <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
    </div>
    <div class="bottles-img position-relative" style="overflow: hidden; height: 500px; background-image: url('{{ asset('assets/images/bottle.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <!-- Teks Overlay -->
        <div class="position-absolute" style="bottom: 40px; left: 60px; z-index: 1; color: white; text-align: left;">
            <h1 style="font-weight: bold; font-size: 48px; margin: 0;">BOTTLES</h1>
            <p style="font-weight: bold; font-size: 20px; margin: 5px 0 0;">HDPE, LDPE, PP, 6-layer Coex, PET, PET-G</p>
        </div>
    </div>
</section>

<!-- Product Showcase Section moved below Bottles -->
<section id="product-showcase" style="background: #f5f5f5 ; padding: 80px 0;">
    <div class="container text-center">
        <h4 style="color: #333; font-size: 28px; font-weight: bold; margin-bottom: 30px;">
            PRODUCT <span style="color: red;">SHOWCASE</span>
            <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
        </h4>
        <p style="color: black; font-size: 18px; margin-bottom: 60px; max-width: 900px; margin-left: auto; margin-right: auto;">
            Click on a product in each of the three different sectors to get more information about the type and design of the special Dynapack packaging involved
        </p>
        
        <div class="products-grid d-flex justify-content-center align-items-center gap-4 flex-wrap">
            <div class="product-item fade-slide-right" style="animation-delay: 0.1s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/vaseline.png')}}" alt="Vaseline Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.2s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/wardah.png')}}" alt="Wardah Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.3s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/sikatgigi.png')}}" alt="Toothbrush Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.4s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/blender.png')}}" alt="Blender Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.5s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/oli.png')}}" alt="Castrol Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.6s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/olimobil.png')}}" alt="Mobil Oil Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients-section" style="background-color: #EAE2E6; padding: 80px 0;">
    <div class="container">
        <div class="text-center mb-5">
            <h4 style="color: #333; font-size: 28px; font-weight: bold;">
                OUR <span style="color: red;">CLIENTS</span>
            </h4>
            <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
        </div>
        
        <div class="clients-grid" style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 30px; margin-top: 60px;">
            <!-- Row 1 -->
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/aqua.png')}}" alt="Coca Cola" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/bdf.png')}}" alt="Aqua" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/erela.png')}}" alt="Philips" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/gajah.png')}}" alt="Johnson & Johnson" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/indolakto.png')}}" alt="Beiersdorf" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            
            <!-- Row 2 -->
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/johmon.png')}}" alt="Palmtop" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/konicare.png')}}" alt="Tupperware" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/nestle.png')}}" alt="Unilever" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/otsuka.png')}}" alt="FrieslandCampina" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/paragon.png')}}" alt="P&G" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            
            <!-- Row 3 -->
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/rn.png')}}" alt="ExxonMobil" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/rohto.png')}}" alt="ABC" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/simp.png')}}" alt="SC Johnson" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/sinarmas.png')}}" alt="Shell" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/tempo.png')}}" alt="BP Castrol" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            
            <!-- Row 4 -->
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/unilever.png')}}" alt="Masan Group" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/viva.png')}}" alt="Paragon" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/wardah.png')}}" alt="Indomilk" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/widatra.png')}}" alt="PT Astra Honda Motor" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/konimex.png')}}" alt="Reckitt Benckiser" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
        </div>
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
        
        adjustSecondaryNavbar();
        window.addEventListener('resize', adjustSecondaryNavbar);
        
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