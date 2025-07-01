@if (auth()->check())
    @include('layouts.navbar_admin')
@else
    @include('layouts.navbar')
@endif

@section('title')
    Sertifikasi
@endsection

@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/sertifikasi.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div id="preloader">
        <img src="{{ '/assets/images/logo.jpg' }}" alt="Loading...">
    </div>

    <div class="top-text" style="background-image: url('{{ asset('assets/images/bg.jpeg') }}'); background-size: cover; background-position: center;">
        <p class="headline">SERTIFIKASI <span class="high">QUALITY MANAJEMEN</span> </p>
        <p style="font-weight: 200; font-size: 20px;">Extensive experience in rigid plastic manufacturing processes across
            wide range of products and industry applications.</p>
    </div>

    <div class="timeline-container p-0">
        <div class="timeline-line"></div>
        <div class="timeline-circle"></div>
    <div class="mid-content p-0" style="background-color: rgb(188, 181, 181);">
        <div class="container text-start p-0">
            <div class="row align-items-center p-0">
                <div class="col-12 col-lg-6">
                    <div class="sertifikat-label">SERTIFIKAT</div>
                    <h1 class="title">
                        Sertifikasi<br>
                        <span>ISO 9001:2015</span>
                    </h1>
                    <p class="description">Sejak tahun 2005 Asia Plastik berhasil meraih ISO 9001:2000 yang kini telah dikembangkan menjadi ISO 9001:2015</p>
                </div>
                <div style="width: 100%; max-width: 500px; height: auto; overflow: hidden; float: right;">
                    <img src="/assets/images/inovation/inovation1.jpeg" alt="Sertifikasi ISO" 
                         style="width: 100%; height: auto; object-fit: cover; clip-path: polygon(20% 0, 100% 0, 80% 100%, 0 100%);">
                </div>
                
            </div>
        </div>
    </div>
</div>
    
    
    

    <div class="customer-rp fade-in-up">
        <div 
        class="box mt-3" 
        style="background-color: red; position: absolute; left: 0; top: 25%; transform: translateY(-1%); height: 320px; width: 50px;">
    </div>
        <div style="text-align: center; padding-top: 50px">
            <hr style="width: 80px; height: 5px; background-color: red; border: none; margin: 0 auto;">
            <i><h3 class="text" style="padding-top: 10px; text-align: center; color: black;">OUR <span class="highlight">CUSTOMER</span></h3></i>
        </div>
        <div class="o-customer container text-center" style="padding-top: 50px;">
            <div class="row justify-content-center g-4">
                <!-- Baris pertama (3 item) -->
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/viva.png') }}" alt="Viva" class="img-fluid"
                                 style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/aqua.png') }}" alt="Aqua" class="img-fluid"
                                 style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/konicare.png') }}" alt="Sinarmas"
                                 class="img-fluid" style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Baris kedua (3 item) -->
            <div class="row justify-content-center g-4" style="padding-top: 50px;">
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/unilever.png') }}" alt="Unilever" class="img-fluid"
                                 style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/bdf.png') }}" alt="BDF" class="img-fluid"
                                 style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/indolakto.png') }}" alt="Indolakto"
                                 class="img-fluid" style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Baris ketiga (3 item) -->
            <div class="row justify-content-center g-4" style="padding-top: 50px;">
                <div 
                class="box mt-3" 
                style="background-color: red; position: absolute; right: 0; top: 4%; transform: translateY(-5%); height: 300px; width: 50px;">
            </div>
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/erela.png') }}" alt="Erela" class="img-fluid"
                                 style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/konimex.png') }}" alt="Konimex"
                                 class="img-fluid" style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/simp.png') }}" alt="SIMP" class="img-fluid"
                                 style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Baris keempat (3 item) -->
            <div class="row justify-content-center g-4" style="padding-top: 50px;">
                <div class="col-md-4 fade-in-up">
                    <div class="card" style="border: 1px solid white;">
                        <div class="card-header-oc" style="height: 150px;">
                            <img src="{{ asset('assets/images/Customer/paragon.png') }}" alt="Nestle" class="img-fluid"
                                 style="object-fit: contain; max-height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
           
        @include('layouts.footer')
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
    <!-- <div class="container text-center sertif">
        <div class="row align-items-start s1 fade-in-up">
            <div class="col">
                <div class="circle-border">
                    <img src="{{ '/assets/images/placeholder.jpg' }}" alt="">
                </div>
                One of three columns
            </div>
            <div class="col">
                <div class="circle-border">
                    <img src="{{ '/assets/images/placeholder.jpg' }}" alt="">
                </div>
                One of three columns
            </div>
            <div class="col">
                <div class="circle-border">
                    <img src="{{ '/assets/images/placeholder.jpg' }}" alt="">
                </div>
                One of three columns
            </div>
        </div>
        <div class="row align-items-start s2 fade-in-up">
            <div class="col">
                <div class="circle-border">
                    <img src="{{ '/assets/images/placeholder.jpg' }}" alt="">
                </div>
                One of three columns
            </div>
            <div class="col">
                <div class="circle-border">
                    <img src="{{ '/assets/images/placeholder.jpg' }}" alt="">
                </div>
                One of three columns
            </div>
            <div class="col">
                <div class="circle-border">
                    <img src="{{ '/assets/images/placeholder.jpg' }}" alt="">
                </div>
                One of three columns
            </div>
        </div>
        <div class="row align-items-start s3 fade-in-up">
            <div class="col">
                <div class="circle-border">
                    <img src="{{ '/assets/images/placeholder.jpg' }}" alt="">
                </div>
                One of three columns
            </div>
            <div class="col">
                <div class="circle-border">
                    <img src="{{ '/assets/images/placeholder.jpg' }}" alt="">
                </div>
                One of three columns
            </div>
            <div class="col">
                <div class="circle-border">
                    <img src="{{ '/assets/images/placeholder.jpg' }}" alt="">
                </div>
                One of three columns
            </div>
        </div>
    </div> -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(() => {
                document.getElementById('preloader').style.display = 'none';
                document.getElementById('content').style.display = 'block';
            }, 500);

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



