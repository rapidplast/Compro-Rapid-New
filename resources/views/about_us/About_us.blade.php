@if(auth()->check())
    @include('layouts.navbar_admin')
@else
    @include('layouts.navbar')
@endif

@section('title')
 About Us
@endsection

@section('content')

<link rel="stylesheet" href="{{asset('assets/css/aboutus.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<div id="preloader">
    <img src="{{asset('/assets/images/logo.png')}}" alt="Loading...">
</div>

<nav class="company-nav">
    <div class="company-nav-container">
        <div class="company-nav-title">Company</div>
        <div class="company-nav-links">
            <a href="#companyGlobal" class="company-link">Company Global</a>
            <a href="#vimi" class="company-link">Visi & Misi</a>
            <a href="#motto" class="company-link">Motto</a>
            <a href="#nom" class="company-link">Number Of Employees</a>
            <a href="#bo" class="company-link">Branch Office</a>
        </div>
    </div>
</nav>


<section id="on-top">
    <div class="one-stop" style="background-image: url('{{ asset('assets/images/address.jpg') }}'); background-size: cover; background-position: center 23%; margin-top: 100px;">
        <div class="text-img">
            <h3><b><span style="color: white;">LEADERSHIP WITH</span></b></h3>
            <h3><b><span style="color: #ff0000ff;">EXTENSIVE INDUSTRY EXPERIENCE</span></b></h3>
            <p class="first-text m-0"><span style="color: white;">Our Board of Directors and Management team consists of seasoned </p>
            <p class="second-text p-0"><span style="color: white;">Professionals with extensive experience in the rigid Plastic packaging industry under the leadership of ...... and ......</p>
            </div>
        </div>
    </div>
</section>

<div id="companyGlobal" class="container-fluid text-center vimi" style="padding-top: 50px; background-color: #ffffffff;">
    <div style="padding: 30px;" class="global"><h3><i><b>COMPANY <span class="highlight">GLOBAL PRESENCE</span></i></h3></b>
    <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
        <div class="global-text" style="padding: 30px;">
            Operating regional locations across Indonesia ensures optimal benefits for our customers. Our 
            <br>production operations spread across different regions help shorten distribution routes, allowing us to
            <br>respond to customer needs more quickly and flexibly. We don't just serve the market; we are part of the 
            <br>market itself. With an extensive network of partnerships and loyal customers across Indonesia, we are always ready 
            <br>to support product and technology development needs, providing the best solutions tailored to local needs.
        </div>
    </div>
    <div id="vimi" class="row align-items-start fade-in-up p-0">
        <div class="col">
            <img class="visi" style="width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/about_us/dot.jpg')}}" alt="">
        </div>
        <div class="col visi-teks p-4">
            <i><h4 style="text-align: center;font-weight: bold; font-size: 28px; ">OUR <span class="highlight" style="font-weight: bold; font-size: 30px;">VISION</span></h4></i>
            <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
            <p style="text-align: start; padding-left: 0px; font-size: 18px;">
                To be a growing company in Indonesia that provides end-to-end solutions in Bottles, Tubes, Toothbrushes and Plastic packaging providers.
            </p>
        </div>
        
    </div>
    <div class="row align-items-start fade-in-up">
        <div class="col misi-teks order-2 order-md-1">
            <i><h4 style="text-align: center;font-weight: bold; font-size: 32px; ">OUR <span class="highlight" style="font-weight: bold; font-size: 32px;">MISION</span></h4></i>
            <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
            <ul class="numbered-list">
                <li>Committed to anticipating our customers' needs and responding creatively and competitively by providing total solutions, excellent service and competitive products.</li>
                <li>Recruit and develop employee capabilities by providing training and rewarding employees based on innovation, achievement and professionalism.</li>
                <li>Ensure business success through an overall commitment to high performance standards, effective teamwork, avoidance of bureaucracy, and willingness to develop new ideas and continuous learning.</li>
                <li>Achieve profitable and sustainable business growth and provide maximum long-term value for shareholders and employees.</li>
                <li>Care for the environment and the surrounding community.</li>
            </ul>
        </div>
        <div class="col order-1 order-md-2">
            <img class="visi" style="margin-top: 120px; width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/about_us/cnc.png')}}" alt="">
        </div>
    </div>

<div id="motto" style="display: flex; align-items: center; background-color: #ffffffff;  font-family: 'Times New Roman', Times, serif;">
        <div style="flex: 1; overflow: hidden; position: relative; display: flex; justify-content: center; align-items: center;">
          <div style="width: 100%; height: 100%; position: relative;">
            <img src="{{asset('/assets/images/about_us/visi.png')}}" alt="Responsibility" style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
          </div>
        </div>
        <div style="flex: 1; padding: 20px; background-color: grey; color: white; text-align: center;">
          <i><h4 style="font-size: 28px;font-weight: bold; text-transform: uppercase;">
            RAPID PLAST<span class="highlight" style="font-weight: bold; font-size: 30px;"> MOTTO</span>
          </h4></i>
          <p style="color: white; font-size: 14px; line-height: 1.5; margin: 0;">
            To be the leading total solution provider in ASIA
            for innovative<br>
            environmentally friendly and technologically advanced packaging and plastics<br>
            environmentally friendly and technologically advanced
          </p>
    </div>
</div>

<section id="nom" class="employ">
    <i>
      <h5>NUMBER OF EMPLOYEES</h5>
      <h5 class="highlight">PT RAPID PLAST</h5>
    </i>
    <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
</section>

<section class="number">
</div>
    <div class="container text-center">
        <div class="d-flex relative">
            <img src=" {{asset('assets/images/home/peta.png')}}" alt="" style="width: 100dvw; margin-bottom: 0px;">
            <div class="position-absolute " style="left: 10%;">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body" style="border-radius: 15px;">
                        <h5 class="card-title">RAPID PLAST</h5>
                        <h6 class="card-title">1 & 6</h6>
                        <h6 class="highlight card-title">SIDOARJO</h6>
                        <i><b class="card-text">235</b></i>
                        <p class="highlight"><i>Employees</i></p>
                    </div>
                </div>
            </div>

            <div class="position-absolute translate-middle-x" style="left: 50%; top: 50%;">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body" style="border-radius: 15px;">
                        <h5 class="card-title">RAPID PLAST</h5>
                        <h6 class="card-title">3 & 5</h6>
                        <h6 class="highlight card-title">CIKARANG</h6>
                        <i><b class="card-text">121</b></i>
                        <p class="highlight"><i>Employees</i></p>
                    </div>
                </div>
            </div>
            <div class="position-absolute " style="right: 10%">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body" style="border-radius: 15px;">
                        <h5 class="card-title">RAPID PLAST</h5>
                        <h6 class="card-title">2 & 4</h6>
                        <h6 class="highlight card-title">PASURUAN</h6>
                        <i><b class="card-text">91</b></i>
                        <p class="highlight"><i>Employees</i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="bo" class="rapid" style="background-color: #e8e8e8ff; padding-bottom: 50px;">
    <i><h4 style="text-align: center; font-size: 32px;font-weight: bold; ">RAPID PLAST INDUSTRY <span class="highlight" style="font-weight: bold; font-size: 32px;">BRANCH OFFICE</span></h4></i>
    <div style="width: 60px; height: 4px; background-color: #ff0000ff; margin: 20px auto;"></div>
<div class="d-flex d-lg-none justify-content-center flex-column align-items-center">
    <div style="margin-top: 50px">
        <i><b>PLANT <span class="highlight">1</span></b></i>
    </div>
    <div class=" fade-in-up">
        <div class="" style="height: 115px; width: 345px; border-radius: 10px; padding-top: 200px;">
            <div class="" style="height: 115px; width: 345px; background-color: red; border-radius: 10px; ">
                <p style="padding-top: 10px; color: white">Established in February 1993, this facility specializes in the production of bottles, closures, and decorations, supporting a wide range of packaging needs.</p>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px">
        <i><b>PLANT <span class="highlight">2</span></b></i>
    </div>
    <div class=" fade-in-up">
        <div class="" style="height: 115px; width: 345px; border-radius: 10px;">
            <div class="" style="height: 115px; width: 345px; background-color: red; border-radius: 10px; ">
                <p style="padding-top: 10px; color: white">Launched in January 2002, this plant focuses on manufacturing closures, infant milk spoons, and medical-grade products within a clean room environment.</p>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px">
        <i><b>PLANT <span class="highlight">3</span></b></i>
    </div>
    <div class=" fade-in-up">
        <div class="" style="height: 115px; width: 345px; border-radius: 10px;">
            <div class="" style="height: 115px; width: 345px; background-color: red; border-radius: 10px; ">
                <p style="padding-top: 10px; color: white">Opened in March 2009, this facility is dedicated to the production of extrusion tubes and decorative packaging solutions.</p>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px">
        <i><b>PLANT <span class="highlight">4</span></b></i>
    </div>
    <div class=" fade-in-up">
        <div class="" style="height: 115px; width: 345px; border-radius: 10px;">
            <div class="" style="height: 115px; width: 345px; background-color: red; border-radius: 10px; ">
                <p style="padding-top: 10px; color: white">Since October 2013, this plant has been producing bottles and closures specifically for the dairy and beverage industries, with plans to expand for sustainable growth in the future.</p>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px">
        <i><b>PLANT <span class="highlight">5</span></b></i>
    </div>
    <div class=" fade-in-up">
        <div class="" style="height: 115px; width: 345px; border-radius: 10px;">
            <div class="" style="height: 115px; width: 345px; background-color: red; border-radius: 10px; ">
                <p style="padding-top: 10px; color: white">Starting operations in December 2019, this plant specializes in the production of bottles for the dairy industry.</p>
            </div>
        </div>
    </div>

    <div style="margin-top: 30px">
        <i><b>PLANT <span class="highlight">6</span></b></i>
    </div>
    <div class=" fade-in-up">
        <div class="" style="height: 115px; width: 345px; border-radius: 10px;">
            <div class="" style="height: 115px; width: 345px; background-color: red; border-radius: 10px; ">
                <p style="padding-top: 10px; color: white">Plant 6 In-plant starting 1 januari 2024, product handle toothbrush</p>
            </div>
        </div>
    </div>
</div>

<div class="container text-center d-none d-lg-block">
    <div class="row align-items-start">
        <div class="col d-flex justify-content-center align-items-start">
            <div class="container text-center">
                <div class="row align-items-start">
                    <div class="col">
                    <div class="align-self-center fade-in-up">
                        <div class="card-three" style="height: 115px; width: 345px; border-radius: 10px; margin-top: 0px; margin-right: -705px;">
                            <div class="card-body-three" style="height: 115px; width: 345px; border-radius: 10px; ">
                                <p style="padding-top: 10px; color: black; text-align: start;">Established in February 1993, this facility specializes in the production of bottles, closures, and decorations, supporting a wide range of packaging needs.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="align-self-center" style="margin-top: 155px; margin-right: -790px;">
                        <i><b>PLANT <span class="highlight">2</span></b></i>
                    </div>
                    </div>
                    <div class="col">
                    <div class="align-self-center fade-in-up" style="margin-top: 360px; margin-right: 40px;">
                        <div class="card-three-3" style="height: 115px; width: 345px; border-radius: 10px; margin-top: -130px; margin-right: -705px;">
                            <div class="card-body-three-3" style="height: 115px; width: 345px; border-radius: 10px; ">
                                <p style="padding-top: 20px; color: black; text-align: start;">Opened in March 2009, this facility is dedicated to the production of extrusion tubes and decorative packaging solutions.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="align-self-center" style="margin-top: 385px; margin-right: -560px;">
                        <i><b>PLANT <span class="highlight">4</span></b></i>
                    </div>
                    </div>
                    <div class="col">
                    <div class="align-self-center fade-in-up" style="margin-top: 600px; margin-left: -10px;">
                        <div class="card-three-5" style="height: 115px; width: 345px; border-radius: 10px; margin-top: -150px; margin-right: -705px;">
                            <div class="card-body-three-5" style="height: 115px; width: 345px; border-radius: 10px; ">
                                <p style="padding-top: 20px; color: black; text-align: start;">Starting operations in December 2019, this plant specializes in the production of bottles for the dairy industry.</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="align-self-center" style="margin-top: 620px; margin-right: -350px;">
                        <i><b>PLANT <span class="highlight">6</span></b></i>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="vertical-line">
                <div class="circle-container">
                    <div class="circle">
                    </div>
                    <div class="circle">
                    </div>
                    <div class="circle">
                    </div>
                    <div class="circle">
                    </div>
                    <div class="circle">
                    </div>
                    <div class="circle">
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center align-items-start">
            <div class="col">
                <div class="align-self-center" style="margin-top: 140px; margin-left: -300px;">
                    <i><b>PLANT <span class="highlight">1</span></b></i>
                </div>
            </div>
            <div class="col">
                <div class="align-self-center fade-in-up" style="margin-top: 250px; margin-left: -300px;">
                    <div class="card-three-2" style="height: 115px; width: 345px; border-radius: 10px; margin-top: 90px; margin-right: -705px;">
                        <div class="card-body-three-2" style="height: 115px; width: 345px; border-radius: 10px; ">
                            <p style="padding-top: 10px; color: black; text-align: start;">Launched in January 2002, this plant focuses on manufacturing closures, infant milk spoons, and medical-grade products within a clean room environment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="align-self-center" style="margin-top: 370px; margin-left: -550px;">
                    <i><b>PLANT <span class="highlight">3</span></b></i>
                </div>
            </div>
            <div class="col">
                <div class="align-self-center fade-in-up" style="margin-top: 480px; margin-left: -550px;">
                    <div class="card-three-4" style="height: 115px; width: 345px; border-radius: 10px; margin-top: 90px; margin-right: -705px;">
                        <div class="card-body-three-4" style="height: 115px; width: 345px; border-radius: 10px; ">
                            <p style="padding-top: 10px; color: black; text-align: start;">Since October 2013, this plant has been producing bottles and closures specifically for the dairy and beverage industries, with plans to expand for sustainable growth in the future.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="align-self-center" style="margin-top: 605px; margin-left: -785px;">
                    <i><b>PLANT <span class="highlight">5</span></b></i>
                </div>
            </div>
            <div class="col">
                <div class="align-self-center fade-in-up" style="margin-top: 720px; margin-left: -665px;">
                    <div class="card-three-4" style="height: 115px; width: 345px; border-radius: 10px; margin-top: 90px; margin-right: -705px;">
                        <div class="card-body-three-4" style="height: 115px; width: 345px; border-radius: 10px; ">
                            <p style="padding-top: 10px; color: black; text-align: start;"> Plant 6 In-plant starting 1 januari 2024, product handle toothbrush</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

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
    // Script untuk navbar Company style dengan penyesuaian otomatis
    document.addEventListener('DOMContentLoaded', function() {
        const mainNavbar = document.querySelector('.navbar'); 
        const companyNavbar = document.querySelector('.company-nav');
        
        // Fungsi untuk mengatur posisi navbar kedua
        function adjustCompanyNavbar() {
            if (mainNavbar && companyNavbar) {
                const mainNavbarHeight = mainNavbar.offsetHeight;
                companyNavbar.style.top = mainNavbarHeight + 'px';
            }
        }
        
        // Panggil saat load dan resize
        adjustCompanyNavbar();
        window.addEventListener('resize', adjustCompanyNavbar);
        
        // Script scroll untuk hide/show navbar
        let lastScrollTop = 0;
        
        window.addEventListener('scroll', function () {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const mainNavbarHeight = mainNavbar ? mainNavbar.offsetHeight : 90;
            
            if (scrollTop > lastScrollTop) {
                // Scroll down -> hide navbar
                companyNavbar.style.top = "-70px";
            } else {
                // Scroll up -> show navbar
                companyNavbar.style.top = mainNavbarHeight + "px";
            }
            
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });
    });
</script>

@include('layouts.footer')