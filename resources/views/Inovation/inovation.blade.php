<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapid Plast</title>
    @if (auth()->check())
        @include('layouts.navbar_admin')
    @else
        @include('layouts.navbar')
    @endif
    
    <nav class="alpla-nav">
        <div class="alpla-nav-container">
            <div class="alpla-nav-title">Innovation</div>
            <div class="alpla-nav-links">
                <a href="#id" class="alpla-link">Turning Ideas Into Solution</a>
                <a href="#ino" class="alpla-link">Innovative Solution</a>
                <a href="#collab" class="alpla-link">Collaboration</a>
                <a href="#product" class="alpla-link">Distinctive</a>
            </div>
        </div>
    </nav>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/inovation.css')}}">
    
    <div id="preloader"> 
        <img src="{{asset('/assets/images/logo.png')}}" alt="Loading...">
    </div>
</head>

<body>
    <section id="on-top">
    <div class="one-stop" style="background-image: url('{{ asset('assets/images/home/culture2.jpeg') }}'); background-size: cover; background-position: center 75%; margin-top: 100px;">
        <div class="text-img">
            <h3><b><span style="color: white;">ENHANCING BRANDS THROUGH </span></b></h3>
            <h3><b><span style="color: red;">ECO-FRIENDLY PACKAGING</span></b></h3>
            <p class="first-text m-0"><span style="color: white;">August 1, 1992, established a manufacturer of plastic packaging </p>
            <p class="second-text p-0"><span style="color: white;">toothbrushes, and plastic tubes, which is a subsidiary of Dynapack Asia, serving leading brands across Asia</p>
            </div>
        </div>
    </div>
</section>

    <section id="id" class="ideas" style="background-color: #EAE2E6">
        <b><h4>TURNING IDEAS <span class="highlight">INTO SOLUTIONS</span></h4></b>
        <div class="sub-ideas">
            <p>We believe that the future belongs to those who can turn ideas into solutions. With our 4 decades of experience, Impack has proven its existence through unique and innovative solutions that meet consumer needs.Through Rapid Plast, we specialize in plastic and bottle production innovations that combine cutting-edge technology, sustainability, and efficiency. 
                Our commitment is to deliver products that not only meet but exceed market expectations, supporting industries with high-quality plastic packaging solutions. From design to manufacturing, we ensure every detail aligns with our mission to provide practical, durable, and eco-friendly solutions for a variety of applications.
                This is how we bring ideas to life and transform them into tangible solutions that create value for our customers and the environment.
            </p>
        </div>
    </section>

    <section id="ino" class="inovasi-2" style="background-color: #EAE2E6">
        <p class="text-inovasi-2" style=" font-weight: normal;color: black; text-align: center;">INNOVATIVE SOLUTIONS ALIGN WITH <span class="highlight">DNPA SUSTAINABILITY GOALS,</span>  AS FOLLOWS</p>
        <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <img class="visi" style="width: 80dvw; max-width: 500px; height: 100%; margin-top: 35px; border-radius: 10px;" src="{{asset('/assets/images/about_us/visi.png')}}" alt="">
              </div>
              <div class="col">
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <div class="card" style="text-align: start; font-size: 35px; background-color: #D9D9D9;">
                                <div class="card-body">
                                    <div style="display: inline-block; padding: 15px; border-radius: 50%; border: 2px dashed rgb(0, 0, 0);">
                                        <i class="bi bi-cup-straw" style="color: red;"></i>
                                    </div>
                                    <p style="font-size: 15px; color: black;">Remove mix-material (e.g. HDPE-LDPE) from packaging products</p>
                                </div>
                            </div>
                        </div>
                      <div class="col">
                        <div class="card" style="text-align: start; font-size: 35px; background-color: #D9D9D9"">
                            <div class="card-body">
                                <div style="display: inline-block; padding: 15px; border-radius: 50%; border: 2px dashed rgb(0, 0, 0);">
                                    <i class="bi bi-cup-straw" style="color: red;"></i>
                                </div>
                                <p style="font-size: 15px; color: black;">Remove mix-material (e.g. HDPE-LDPE) from packaging products</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center p-3">
                    <div class="row align-items-center">
                        <div class="col">
                        </div>
                        <div class="col">
                            <div class="card" style="text-align: start; font-size: 35px; width: 240px; background-color: #D9D9D9">
                                <div class="card-body">
                                    <div style="display: inline-block; padding: 15px; border-radius: 50%; border: 2px dashed rgb(0, 0, 0);">
                                        <i class="bi bi-cup-straw" style="color: red;"></i>
                                    </div>
                                    <p style="font-size: 15px; color: black;">Remove mix-material (e.g. HDPE-LDPE) from packaging products</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section id="collab" class="realm p-5" style="position: relative; background-color: #EAE2E6;">
        <div style="position: absolute; top: 200px; left: 0; right: 0; height: 300px; background-color: gray; z-index: 1;"></div>    
        <div class="container text-center p-0" style="position: relative; z-index: 2;">
            <div class="row align-items-start">
                <div class="col pl-0">
                    <i><p style="text-align: start; color: black; font-size: 30px;">
                        COLLABORATION WITH RENOWNED
                        <span class="highlight">SUPPLIERS AND CLIENTS</span> <br>
                    </p></i>
                </div>
                <div class="col p-0">
                    <img class="visi" style="width: 80dvw; max-width: 550px; height: 100%; border-radius: 30px;"
                        src="{{asset('/assets/images/home/kerja.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <br>
        <div class="container text-start p-0" style="position: relative; z-index: 2;">
            <div class="row align-items-start">
                <div class="col p-0">
                    <img class="visi" style="width: 80dvw; max-width: 500px; height: 100%; border-radius: 10px;"
                        src="{{asset('/assets/images/home/paktua.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="product" class="product-dd" style="padding-left: 30px; padding-bottom: 30px; background-color: #EAE2E6;">
        <div class="text-product-dd">
            <i>
                <p style="font-weight: bold; color: black; font-size: 25px;">
                    DISTINCTIVE <span class="highlight"> PRODUCT FEATURES</span>
                </p>
            </i>
        </div>
        <br>
        <div class="image-dd">
            <div class="content p-0">
                <div class="accordion">
                    <div class="accordion-item"
                        style="background-color: #EAE2E6; border-color: black; border-left: none; border-right: none; border-top: none;">
                        <span style="color: black;">TUBE LONG NOZZLE</span>
                        <i class="bi bi-plus-circle-fill" onclick="toggleDropdown(this)"></i>
                    </div>
                    <div class="dropdown-content">
                        <img src="{{asset('assets/images/inovation/oli.jpeg')}}" alt="oli" width="300"
                            height="200">
                        <img src="{{asset('assets/images/inovation/tutup-oli.jpeg')}}" alt="tutup-oli"
                            width="300" height="200" style="padding-top: 20px;">
                    </div>
                    <div class="accordion-item"
                        style="background-color: #EAE2E6; border-color: black; border-left: none; border-right: none; border-top: none;">
                        <span style="color: black;">NECK TO NECK BOTTLE</span>
                        <i class="bi bi-plus-circle-fill" onclick="toggleDropdown(this)"></i>
                    </div>
                    <div class="dropdown-content">
                        <img src="{{asset('assets/images/inovation/oli.jpeg')}}" alt="oli" width="300"
                            height="200">
                        <img src="{{asset('assets/images/inovation/tutup-oli.jpeg')}}" alt="tutup-oli"
                            width="300" height="200" style="padding-top: 20px;">
                    </div>
                    <div class="accordion-item"
                        style="background-color: #EAE2E6; border-color: black; border-left: none; border-right: none; border-top: none;">
                        <span style="color: black;">CUSTOM-DESIGNED BOTTLE AND CLOSURE</span>
                        <i class="bi bi-plus-circle-fill" onclick="toggleDropdown(this)"></i>
                    </div>
                    <div class="dropdown-content">
                        <img src="{{asset('assets/images/inovation/oli.jpeg')}}" alt="oli" width="300"
                            height="200">
                        <img src="{{asset('assets/images/inovation/tutup-oli.jpeg')}}" alt="tutup-oli"
                            width="300" height="200" style="padding-top: 20px;">
                    </div>
                    <div class="accordion-item"
                        style="background-color: #EAE2E6; border-color: black; border-left: none; border-right: none; border-top: none;">
                        <span style="color: black;">WELDSPOUT FOR POUCHES</span>
                        <i class="bi bi-plus-circle-fill" onclick="toggleDropdown(this)"></i>
                    </div>
                    <div class="dropdown-content">
                        <img src="{{asset('assets/images/inovation/oli.jpeg')}}" alt="oli" width="300"
                            height="200">
                        <img src="{{asset('assets/images/inovation/tutup-oli.jpeg')}}" alt="tutup-oli"
                            width="300" height="200" style="padding-top: 20px;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const categories = document.querySelectorAll(".produk a");
            const allCards = document.querySelectorAll(".card");
            const sections = {
                "Personal care": document.getElementById("card-product-persoalcare"),
                "Pharmacy": document.getElementById("card-product-pharmacy"),
                "Food": document.getElementById("card-product-food")
            };

            categories.forEach(category => {
                category.addEventListener("click", function(event) {
                    event.preventDefault();

                    categories.forEach(cat => cat.classList.remove("active"));
                    this.classList.add("active");

                    Object.values(sections).forEach(section => section.style.display = "none");

                    const categoryName = this.textContent.trim();
                    if (sections[categoryName]) {
                        sections[categoryName].style.display = "block";
                    }

                    allCards.forEach(card => card.classList.remove("active"));
                    const activeSection = sections[categoryName];
                    if (activeSection) {
                        activeSection.querySelectorAll(".card").forEach(card => {
                            card.classList.add("active");
                        });
                    }
                });
            });

            categories[0].click();
        });
    </script>

    <script>
        function toggleDropdown(element) {
            // Tutup semua dropdown lain terlebih dahulu
            const allDropdowns = document.querySelectorAll('.dropdown-content');
            const allIcons = document.querySelectorAll('.accordion-item i');
            
            const currentDropdown = element.parentElement.nextElementSibling;
            const isCurrentlyOpen = currentDropdown.classList.contains('open');
            
            // Tutup semua dropdown dan reset icon
            allDropdowns.forEach(dropdown => {
                dropdown.classList.remove('open');
                dropdown.style.display = "none";
            });
            
            allIcons.forEach(icon => {
                icon.classList.remove('bi-dash-circle-fill');
                icon.classList.add('bi-plus-circle-fill');
            });
            
            // Jika dropdown yang diklik tidak sedang terbuka, buka dropdown tersebut
            if (!isCurrentlyOpen) {
                currentDropdown.classList.add('open');
                currentDropdown.style.display = "block";
                element.classList.remove('bi-plus-circle-fill');
                element.classList.add('bi-dash-circle-fill');
            }
        }
        
        // Tutup dropdown jika klik di luar area
        document.addEventListener('click', function(event) {
            const isAccordionClick = event.target.closest('.accordion-item');
            if (!isAccordionClick) {
                const allDropdowns = document.querySelectorAll('.dropdown-content');
                const allIcons = document.querySelectorAll('.accordion-item i');
                
                allDropdowns.forEach(dropdown => {
                    dropdown.classList.remove('open');
                    dropdown.style.display = "none";
                });
                
                allIcons.forEach(icon => {
                    icon.classList.remove('bi-dash-circle-fill');
                    icon.classList.add('bi-plus-circle-fill');
                });
            }
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
        // Script untuk navbar ALPLA style dengan penyesuaian otomatis
        document.addEventListener('DOMContentLoaded', function() {
            const mainNavbar = document.querySelector('.navbar'); 
            const secondaryNavbar = document.querySelector('.alpla-nav');
            
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>