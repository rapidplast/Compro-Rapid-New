@if(auth()->check())
    @include('layouts.navbar_admin')
@else
    @include('layouts.navbar')
@endif

<nav class="product-nav">
    <div class="product-nav-container">
        <div class="product-nav-title">Product & Services</div>
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
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

<section id="knowledge" style="background-color: #ffffffff;">
    <div class="knowledge">
        <h3><b><i>KNOWLEDGE THROUGH <span style="color: red;">EXPERIENCE</span></i></b></h3>
        <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
        <p style="padding: 50px;">With over 60 years of experience in plastics processing, we bring deep expertise in customer consultation. From design and material selection to the right production technology, we partner with our clients to create competitive, high-quality, and visually appealing packaging solutions.</p>
    </div>
</section>

<section style="background-color: #ffffffff;">
    <div class="img-des">
        <div class="container text-center">
            <div class="row align-items-center">
              <div class="col">
                <img class="cp" style="width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/product/consumer.png')}}" alt="">
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
                <img class="ip" style="width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/product/package.png')}}" alt="">
              </div>
            </div>
        </div>
        <div class="container text-center P-5">
            <div class="row align-items-center">
              <div class="col">
                <img class="pd" style="width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/product/pabrik.png')}}" alt="">
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

<section id="product" class="clean-product-section m-0" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('{{asset("assets/images/home/product.jpeg")}}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="section-header">
                <h4 class="section-title">
                    PRODUCT <span class="red-highlight">& SERVICE</span>
                </h4>
                <div class="title-underline"></div>
            </div>
            
            <div class="products-row">
                <div class="product-box">
                    <div class="box-header">
                        <div class="logo-placeholder">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <h5 class="box-title">Container Packaging</h5>
                    </div>
                    <div class="box-image">
                        <img src="{{asset('assets/images/home/botol.jpeg')}}" alt="Container Packaging" onerror="this.src='https://via.placeholder.com/300x160/c41e3a/ffffff?text=Container+Packaging'">
                    </div>
                    <div class="box-content">
                        <p>Plastic containers are the packaging of choice for a wide range of household needs, including personal care products, food & beverages, medicines, and cleaning tools.</p>
                    </div>
                </div>

                <div class="product-box">
                    <div class="box-header">
                        <div class="logo-placeholder">
                            <i class="bi bi-capsule"></i>
                        </div>
                        <h5 class="box-title">Tube Packaging</h5>
                    </div>
                    <div class="box-image">
                        <img src="{{asset('assets/images/home/tub.jpeg')}}" alt="Tube Packaging" onerror="this.src='https://via.placeholder.com/300x160/c41e3a/ffffff?text=Tube+Packaging'">
                    </div>
                    <div class="box-content">
                        <p>Tube packaging is ideal for thick liquids and pastes, including industrial chemicals, automotive products, medical ointments, and artistic pigments.</p>
                    </div>
                </div>

                <div class="product-box">
                    <div class="box-header">
                        <div class="logo-placeholder">
                            <i class="bi bi-grid-3x3-gap"></i>
                        </div>
                        <h5 class="box-title">Component Packaging</h5>
                    </div>
                    <div class="box-image">
                        <img src="{{asset('assets/images/home/cek.jpg')}}" alt="Component Packaging" onerror="this.src='https://via.placeholder.com/300x160/c41e3a/ffffff?text=Component+Packaging'">
                    </div>
                    <div class="box-content">
                        <p>An essential component of plastic packaging for packing home goods, personal care products, and groceries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section class="safety" style="background-color: #ffffffff;">
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
<section id="board" style="background-color: #ffffffff;">
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

<!-- Product Showcase Section below Bottles -->
<section id="product-showcase" style="background: #f1f0f0ff; padding: 80px 0;">
    <div class="container text-center">
        <h4 style="color: #333; font-size: 28px; font-weight: bold; margin-bottom: 30px;">
            PRODUCT <span style="color: red;">SHOWCASE</span>
            <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
        </h4>
        <p style="color: black; font-size: 18px; margin-bottom: 60px; max-width: 900px; margin-left: auto; margin-right: auto;">
            Click on a product in each of the three different sectors to get more information about the type and design of the special Rapid Plast packaging involved
        </p>
        
        <div class="products-grid d-flex justify-content-center align-items-center gap-4 flex-wrap">
            <div class="product-item fade-slide-right" style="animation-delay: 0.1s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/vaseline.png')}}" alt="Aqua Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.2s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/wardah.png')}}" alt="Wardah Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.3s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/pocari.png')}}" alt="Viva Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.4s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/jhonson.png')}}" alt="Jhonson Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.5s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex;overflow: hidden; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/viva.jpg')}}" alt="Nestle Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
            
            <div class="product-item fade-slide-right" style="animation-delay: 0.6s;">
                <div class="product-card" style="background: white; border-radius: 10px; padding: 20px; width: 180px; height: 200px; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: transform 0.3s ease;">
                    <img src="{{asset('assets/images/product/aqua.png')}}" alt="Mobil Oil Product" style="max-width: 100%; max-height: 100%; object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="clients-section" style="background-color: #f5f5f5; padding: 80px 0;">
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
                <img src="{{asset('assets/images/clients/unilever.png')}}" alt="Aqua" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/nestle.png')}}" alt="Philips" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/otsuka.png')}}" alt="Johnson & Johnson" style="max-width: 100%; max-height: 80px; object-fit: contain;">
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
                <img src="{{asset('assets/images/clients/erela.png')}}" alt="Unilever" style="max-width: 100%; max-height: 80px; object-fit: contain;">
            </div>
            <div class="client-card" style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); display: flex; align-items: center; justify-content: center; height: 120px;">
                <img src="{{asset('assets/images/clients/gajah.png')}}" alt="FrieslandCampina" style="max-width: 100%; max-height: 80px; object-fit: contain;">
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
                <img src="{{asset('assets/images/clients/bdf.png')}}" alt="Masan Group" style="max-width: 100%; max-height: 80px; object-fit: contain;">
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
    // Preloader logic
    setTimeout(() => {
        const preloader = document.getElementById('preloader');
        const content = document.getElementById('content');
        if (preloader) preloader.style.display = 'none';
        if (content) content.style.display = 'block';
    }, 300);

    
    const observerOptions = {
        threshold: 0.1, 
        rootMargin: '0px 0px -50px 0px' 
    };

    
    const fadeUpObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            } else {
               
                entry.target.classList.remove('show');
            }
        });
    }, observerOptions);

    
    const fadeSlideObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            } else {
                
                entry.target.classList.remove('animate');
            }
        });
    }, observerOptions);

    
    const clientObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                
                entry.target.style.animation = 'none';
                entry.target.offsetHeight; 
                
                
                const childIndex = Array.from(entry.target.parentNode.children).indexOf(entry.target) + 1;
                const animationDelay = (childIndex * 0.1) + 's';
                
                
                entry.target.style.animation = `slideInClient 0.8s ease-out ${animationDelay} forwards`;
                entry.target.classList.add('show');
            } else {
                
                entry.target.classList.remove('show');
                entry.target.style.animation = 'none';
                entry.target.style.opacity = '0';
                entry.target.style.transform = 'translateY(50px) scale(0.9)';
            }
        });
    }, observerOptions);

    
    const clientSectionObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                
                const clientCards = entry.target.querySelectorAll('.client-card');
                clientCards.forEach((card, index) => {
                    
                    card.style.animation = 'none';
                    card.offsetHeight; 
                    
                    const delay = (index * 0.1) + 0.1;
                    setTimeout(() => {
                        card.style.animation = `slideInClient 0.8s ease-out forwards`;
                        card.classList.add('show');
                    }, delay * 1000);
                });
            } else {
                const clientCards = entry.target.querySelectorAll('.client-card');
                clientCards.forEach(card => {
                    card.classList.remove('show');
                    card.style.animation = 'none';
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(50px) scale(0.9)';
                });
            }
        });
    }, {
        threshold: 0.2, 
        rootMargin: '0px 0px -100px 0px'
    });

    const fadeUpElements = document.querySelectorAll('.fade-in-up');
    const fadeSlideElements = document.querySelectorAll('.fade-slide-right');
    const clientCards = document.querySelectorAll('.client-card');
    const clientSection = document.querySelector('#clients-section');

    fadeUpElements.forEach(element => {
        fadeUpObserver.observe(element);
    });

    fadeSlideElements.forEach(element => {
        fadeSlideObserver.observe(element);
    });

    if (clientSection) {
        clientSectionObserver.observe(clientSection);
    }

    clientCards.forEach(element => {
        clientObserver.observe(element);
    });

    const mainNavbar = document.querySelector('.navbar'); 
    const secondaryNavbar = document.querySelector('.product-nav');
    
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
            if (secondaryNavbar) secondaryNavbar.style.top = "-70px";
        } else {
            if (secondaryNavbar) secondaryNavbar.style.top = mainNavbarHeight + "px";
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    });

    document.querySelectorAll('.product-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                const offset = mainNavbar ? mainNavbar.offsetHeight + 70 : 160;
                const targetPosition = targetElement.offsetTop - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
</script>