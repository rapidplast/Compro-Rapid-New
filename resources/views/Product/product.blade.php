@if(auth()->check())
    @include('layouts.navbar_admin')
@else
    @include('layouts.navbar')
@endif
@section('title')
    Product
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
<div id="preloader">
    <img src="{{ asset('/assets/images/logo.png') }}" alt="Loading...">
</div>

<nav class="nav2" style="background-color: rgba(128, 128, 128, 0.5); padding-top: 140px;">
    <a href="#knowledge" class="a">Knowledge Through Experience</a>
    <a href="#product" class="a">Products & Service</a>
    <a href="#board" class="a">Broad Selection</a>
</nav>

<section id="on-top">
    <div class="one-stop" style="background-image: url('{{ asset('assets/images/about_us/company.jpeg') }}'); background-size: cover; background-position: center; margin-top: 80px;">
        <div class="text-img">
            <h3><b>ONE - STOP RIGID <span style="color: red;">PACKAGING SOLUTION</span></b></h3>
            <p class="first-text m-0">Our Board of Directors and Management team consists of seasoned </p>
            <p class="second-text p-0">professionals with extensive experience in the rigid plastic packaging industry under the leadership of ...... and ......</p>
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
                <b><h5><i>CONSUMER <span style="color: red;">PACKAGING</span></i></h5></b>
                <p>We service customers in producing a wide range of plastic packaging applications for personal care, food and beverage, homecare, and pharmaceutical products.
                   Variety of product formats including bottles (blow and extruded blow), caps and closures, jars, tube, and toothbrush.
                </p>
              </div>
            </div>
        </div>
        <div class="container text-center p-5">
            <div class="row align-items-center">
              <div class="col des-2">
                <b><h5><i>INDUSTRIAL <span style="color: red;">PACKAGING</span></i></h5></b>
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
                <b><h5><i>PRODUCT <span style="color: red;">DESIGN</span></i></h5></b>
                <p>Our creative designers develop the ideal design concept for the respective market. From the very first sketches, the focus is on technical feasibility in addition to the shape, colour and feel. has implemented thousands of designs over the course of six decades. From conceptual designs to traditional technical designs, we cover the entire range of services.
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
                        <img src="{{ asset('assets/images/home/tub.jpeg') }}" style="width: 100%; height: 110px; margin-top: 10%;"
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
                        <img src="{{ asset('assets/images/home/cek.jpg') }}" style="width: 100%; height: 110px; margin-top: 10%;"
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
                    <img src="{{ asset('assets/images/home/icon1.png') }}" style="width: 100%;" alt="">
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
                    <img src="{{ asset('assets/images/home/icon3.png') }}" style="width: 60%;" alt="">
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
                    <img src="{{ asset('assets/images/home/icon4.png') }}" style="width: 60%;" alt="">
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
    <div class="bottles-img">
        <h1>BOTTLES</h1>
        <p>HDPE, LDPE, PP, 6-layer Coex, PET, PET-G</p>
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

{{-- <div class="top-text">
    <p class="headline">ONE - STOP RIGID <span class="highlight"> PACKING SOLUTION</span></p>
    <p style="font-weight: 200; font-size: 20px;">Extensive experience in rigid plastic manufacturing processes across wide range of products and industry applications.</p>
</div>

<div class="container d-flex flex-md-row flex-column align-items-center justify-content-center gap-5">
    <div 
    class="box mt-3" 
    style="background-color: red; position: absolute; right: 0; top: 45%; transform: translateY(-5%); height: 280px; width: 50px;">
</div>
    <div class="fade-in-up align-self-md-start " style="margin-bottom: 70px">
        <div 
        class="box mt-3" 
        style="background-color: red; position: absolute; left: -100px; top: 180%; transform: translateY(-5%); height: 280px; width: 50px;">
    </div>
        <hr style="width: 80px; margin-left: 45px; height: 5px; color: red;">
        <p><span class="highlight fade-in-up">RAPID PLAST</span> PRODUCTS</p>
        <ul id="productList">
          <li class="fade-in-up active" data-product="cosmetics" style="cursor: pointer;">Personal Care</li>
          <li class="fade-in-up active" data-product="cosmetics" style="cursor: pointer;">Cosmetic</li>
          <li class="fade-in-up" data-product="pharmacy" style="cursor: pointer;">Pharmacy</li>
          <li class="fade-in-up" data-product="pharmacy" style="cursor: pointer;">Medical</li>
          <li class="fade-in-up dropdown" style="cursor: pointer;">
              Food & Beverage
              <div class="dropdown-items" style="display: none;">
                
                  <ul>
                      <li class="dropdown-item" data-product="dairly">Dairy</li>
                      <li class="dropdown-item" data-product="cooking">Edible Oil</li>
                      <li class="dropdown-item" data-product="bottled">Cap Gallon Aqua</li>
                  </ul>
              </div>
          </li>
      </ul>
    </div>
    
    <div class="d-flex flex-wrap gap-5 align-items-center justify-content-center" style="max-width: 70rem;">
        <div class="card fade-in-up" style="width: 15rem; border: none;">
            <div class="card-header" style="background-color: white; border: none;" id="card-1">
                <!-- Image will be inserted here -->
            </div>
        </div>
        <div class="card fade-in-up" style="width: 15rem; border: none;">
            <div class="card-header" style="background-color: white; border: none;" id="card-2">
                <!-- Image will be inserted here -->
            </div>
        </div>
        <div class="card fade-in-up" style="width: 15rem; border: none;">
            <div class="card-header" style="background-color: white; border: none;" id="card-3">
                <!-- Image will be inserted here -->
            </div>
        </div>
        <div class="card fade-in-up" style="width: 15rem; border: none;">
            <div class="card-header" style="background-color: white; border: none;" id="card-4">
                <!-- Image will be inserted here -->
            </div>
        </div>
        <div class="card fade-in-up" style="width: 15rem; border: none;">
            <div class="card-header" style="background-color: white; border: none;" id="card-5">
                <!-- Image will be inserted here -->
            </div>
        </div>
        <div class="card fade-in-up" style="width: 15rem; border: none;">
            <div class="card-header" style="background-color: white; border: none;" id="card-6">
                <!-- Image will be inserted here -->
            </div>
        </div>
        <div class="card fade-in-up" style="width: 15rem; border: none;">
            <div class="card-header" style="background-color: white; border: none;" id="card-7">
                <!-- Image will be inserted here -->
            </div>
        </div>
        <div class="card fade-in-up" style="width: 15rem; border: none;">
            <div class="card-header" style="background-color: white; border: none;" id="card-8">
                <!-- Image will be inserted here -->
            </div>
        </div>
        <div class="card fade-in-up" style="width: 15rem; border: none;">
            <div class="card-header" style="background-color: white; border: none;" id="card-9">
                <!-- Image will be inserted here -->
            </div>
        </div>
    </div>

</div> --}}

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

{{-- <script>
  document.addEventListener("DOMContentLoaded", function() {
    setTimeout(() => {
        document.getElementById('preloader').style.display = 'none';
        document.getElementById('content').style.display = 'block';
    }, 300);

    const productList = document.getElementById('productList');
    const cardHeaders = document.querySelectorAll('.card-header');

    const images = {
        cosmetics: [
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
        ],
        medical: [
            'path/to/medical1.jpg',
            'path/to/medical2.jpg',
            'path/to/medical3.jpg',
            'path/to/medical4.jpg',
            'path/to/medical5.jpg',
            'path/to/medical6.jpg',
            'path/to/medical7.jpg',
            'path/to/medical8.jpg',
            'path/to/medical9.jpg',
        ],
        pharmacy: [
            'path/to/pharmacy1.jpg',
            'path/to/pharmacy2.jpg',
            'path/to/pharmacy3.jpg',
            'path/to/pharmacy4.jpg',
            'path/to/pharmacy5.jpg',
            'path/to/pharmacy6.jpg',
            'path/to/pharmacy7.jpg',
            'path/to/pharmacy8.jpg',
            'path/to/pharmacy9.jpg',
        ],
        dairly: [
            'path/to/food1.jpg',
            'path/to/food2.jpg',
            'path/to/food3.jpg',
            'path/to/food4.jpg',
            'path/to/food5.jpg',
            'path/to/food6.jpg',
            'path/to/food7.jpg',
            'path/to/food8.jpg',
            'path/to/food9.jpg',
        ],
        cooking: [
            'path/to/food1.jpg',
            'path/to/food2.jpg',
            'path/to/food3.jpg',
            'path/to/food4.jpg',
            'path/to/food5.jpg',
            'path/to/food6.jpg',
            'path/to/food7.jpg',
            'path/to/food8.jpg',
            'path/to/food9.jpg',
        ],
        bottled: [
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
            'assets/images/logo.png',
        ],
    };

    function updateCardHeaders(productType) {
        const productImages = images[productType];

        cardHeaders.forEach((cardHeader, index) => {
            if (productImages[index]) {
                cardHeader.innerHTML = `<img src="${productImages[index]}" alt="${productType}" style="width: 100%; height: 100%; object-fit: cover;">`;
            } else {
                cardHeader.innerHTML = '';
            }
        });
    }

    productList.addEventListener('click', function(e) {
        if (e.target.tagName === 'LI') {
            document.querySelectorAll('#productList li').forEach(li => li.classList.remove('active'));
            e.target.classList.add('active');
            const productType = e.target.getAttribute('data-product');
            updateCardHeaders(productType);
        }
    });
    const defaultProduct = document.querySelector('li[data-product="cosmetics"]');
    defaultProduct.click();
});

</script> --}}

{{-- <script>
  document.querySelectorAll('#productList li').forEach(item => {
    item.addEventListener('click', function() {
        document.querySelectorAll('#productList li').forEach(li => li.classList.remove('active'));
        this.classList.add('active');
    });
});
</script> --}}

{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
        const foodDrinkItem = document.querySelector('.dropdown');
        const dropdownItems = document.querySelector('.dropdown-items');

        foodDrinkItem.addEventListener('click', function() {
            console.log("Food & Drink diklik");
            dropdownItems.style.display = dropdownItems.style.display === 'none' ? 'block' : 'none';
            console.log("Tampilan item dropdown:", dropdownItems.style.display);
        });

        dropdownItems.addEventListener('click', function(e) {
            if (e.target.classList.contains('dropdown-item')) {
                console.log("Item dropdown diklik:", e.target.textContent);
                const productType = e.target.getAttribute('data-product');
                document.querySelectorAll('#productList li').forEach(li => li.classList.remove('active'));
                e.target.classList.add('active');
                updateCardHeaders(productType);
                dropdownItems.style.display = 'none';
            }
        });

        document.addEventListener('click', function(event) {
            if (!foodDrinkItem.contains(event.target) && !dropdownItems.contains(event.target)) {
                dropdownItems.style.display = 'none';
            }
        });
    });
</script> --}}



