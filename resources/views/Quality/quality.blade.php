@if(auth()->check())
    @include('layouts.navbar_admin')
@else
    @include('layouts.navbar')
@endif



@section('title')
 Quality
@endsection

@section('content')
<link rel="stylesheet" href="{{asset('assets/css/quality.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<div id="preloader">
    <img src="{{asset('/assets/images/logo.png')}}" alt="Loading...">
</div>

    <section id="on-top">
    <div class="one-stop" style="background-image: url('{{ asset('assets/images/home/tekstil.jpg') }}'); background-size: cover; background-position: center 75%; margin-top: 100px;">
        <div class="tes-img">
            <h3><b><span style="color: white;">ENHANCING BRANDS THROUGH </span></b></h3>
            <h3><b><span style="color: red;">ECO-FRIENDLY PACKAGING</span></b></h3>
            <p class="first-tes m-0"><span style="color: white;">August 1, 1992, established a manufacturer of plastic packaging </p>
            <p class="second-tes p-0"><span style="color: white;">toothbrushes, and plastic tubes, which is a subsidiary of Dynapack Asia, serving leading brands across Asia</p>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #EAE2E6;">
    <div class="first-text">
        <div class="sdg">
            <h3>Sustability Development <span style="color: red">GOALS</span></h3>
            <p>Sustainability is no longer about Corporate Social Responsibility (CSR) issues – it is a business model. In Dynapack Asia, Sustainability is embedded in every aspect of operational activity and adopted in our business strategy by applying responsible practices. In 2018, we started our journey to most sustainable rigid plastic packaging company, so we strive to put sustainability as a base in every decision-making process at each level of employee in our company to deliver products that are eco-savvy.</p>
        </div>
    </div>
</section>

<section style="background-color: #EAE2E6">
    <div class="des-img">
        <div class="container-fluid text-start">
            <div class="row align-items-start">
              <div class="col" style="background-color: #C0C0C0;">
                <h5 style="padding-top: 50px; padding-left: 50px;">RAPIDPLAST ASPIRES TO BE THE LEADING AND MOST <span style="color: red">SUSTAINABLE PLASTIC MANUFACTURING COMPANY IN INDONESIA</span></h5>
                <p style="padding-top: 10px; padding-left: 50px; padding-bottom: 50px;">We are committed to ensuring that our products support environmental sustainability by minimizing pollution to Indonesia's ecosystems, including oceans, rivers, and land. Our production processes aim to achieve maximum efficiency with reduced carbon emissions while prioritizing the welfare of our employees and the communities we engage with."
                    This rewritten version maintains the intent of emphasizing sustainability and community impact while localizing the context for Rapidplast.</p>
              </div>
              <div class="col p-0">
                <img class="img-des" style="width: 80dvw; max-width: 500px; height: 374px" src="{{asset('/assets/images/about_us/visi.png')}}" alt="">
                {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>                 --}}
              </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #EAE2E6;">
    <div class="report">
        <h4>SUSTAINBILITY <span style="color: red">REPORT</span></h4>
        <p>The report provides information about all relevant business, environmental and social developments at the RapidPlast </p>
        <div class="card-set">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="card hover-card mt-3" style="width: 170px;">
                            <div class="card-body">
                                <i class="bi bi-gear-wide-connected"></i>
                                <div class="des">
                                    <a href=""><h4>DESKRIPSI</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card hover-card mt-3" style="width: 170px;">
                            <div class="card-body">
                                <i class="bi bi-gear-wide-connected"></i>
                                <div class="des">
                                    <a href=""><h4>DESKRIPSI</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card hover-card mt-3" style="width: 170px;">
                            <div class="card-body">
                                <i class="bi bi-gear-wide-connected"></i>
                                <div class="des">
                                    <a href=""><h4>DESKRIPSI</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card hover-card mt-3" style="width: 170px;">
                            <div class="card-body">
                                <i class="bi bi-gear-wide-connected"></i>
                                <div class="des">
                                    <a href=""><h4>DESKRIPSI</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card hover-card mt-3" style="width: 170px;">
                            <div class="card-body">
                                <i class="bi bi-gear-wide-connected"></i>
                                <div class="des">
                                    <a href=""><h4>DESKRIPSI</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>

<section style="background-color: #EAE2E6">
    <div class="dlm">
        <div class="container text-center">
            <div class="row align-items-center justify-content-center">
                <div class="col-auto mt-5">
                    <div class="card p-0" style="width: 200px; height: 300px;">
                        <div class="card-body p-0">
                            <img src="{{asset('/assets/images/about_us/visi.png')}}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
                            <div class="text-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                <p style="margin: 0; font-size: 18px;">DESKRIPSI</p>
                            </div>
                            <div class="text-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                <button style="margin-top: 100px;" type="button" class="btn btn-danger">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>                
                <div class="col-auto mt-5">
                    <div class="card p-0" style="width: 200px; height: 300px;">
                        <div class="card-body p-0">
                            <img src="{{asset('/assets/images/about_us/visi.png')}}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
                            <div class="text-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                <p style="margin: 0; font-size: 18px;">DESKRIPSI</p>
                            </div>
                            <div class="text-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                <button style="margin-top: 100px;" type="button" class="btn btn-danger">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto mt-5">
                    <div class="card p-0" style="width: 200px; height: 300px;">
                        <div class="card-body p-0">
                            <img src="{{asset('/assets/images/about_us/visi.png')}}" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
                            <div class="text-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                <p style="margin: 0; font-size: 18px;">DESKRIPSI</p>
                            </div>
                            <div class="text-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold;">
                                <button style="margin-top: 100px;" type="button" class="btn btn-danger">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #EAE2E6">
    <div class="sa">
        <div class="award">
            <h4>SUSTAINBILITY <span style="color: red">AWARD</span></h4>
            <p>At Rapidplast, sustainability embodies responsible actions across three key areas: people and society, ecology and environmental impacts, and efficiency and technology. The Rapidplast Sustainability Award, launched in 2021, aims to highlight the diverse range of initiatives into which employees worldwide invest their dedication and passion. These projects span efforts such as promoting recycling and waste reduction, streamlining internal processes, and protecting local ecosystems. Additionally, social projects supporting communities near Rapidplast sites are warmly encouraged.</p>
        </div>
    </div>
</section>

<section style="background-color: #EAE2E6">
    <div class="wp">
        <div class="winner">
            <h4 class="m-0">WINNER <span style="color: red">PROJECT</span></h4>
        </div>
        <div class="img-first" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
            <img src="{{asset('/assets/images/about_us/visi.png')}}" alt="" style="width: 690px; height: 435px; border-radius: 15px;">
        </div>    
        <div class="des-img-first">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi officia architecto suscipit ratione, qui dolor dolore, laborum aut necessitatibus officiis recusandae. Fugiat sint dolores, quae magni consectetur laborum corporis neque voluptates aliquid totam quisquam et voluptas similique sed doloribus eveniet nemo at facilis dicta ipsa sapiente mollitia nobis, aspernatur nostrum? Voluptas cupiditate vel vitae possimus culpa quod est porro consectetur saepe reiciendis, ea blanditiis explicabo fugit eligendi perferendis fugiat dicta illo voluptate soluta et sit totam magni? Quaerat sed ex, praesentium dignissimos iure laborum dolorem provident quae dolore quod unde atque voluptate rem nam. Incidunt id mollitia nostrum dolores odio!</p>
        </div> 
        <div class="last-img">
            <div class="container text-center">
                <div class="row align-items-center">
                  <div class="col">
                    <img class="cp" style="width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/about_us/visi.png')}}" alt="">
                  </div>
                  <div class="col des-1">
                    {{-- <b><h5><i>CONSUMER <span style="color: red;">PACKAGING</span></i></h5></b> --}}
                    <p>DESKRIPSI</p>
                  </div>
                </div>
            </div>
            <div class="container text-center p-5">
                <div class="row align-items-center">
                  <div class="col des-2">
                    {{-- <b><h5><i>INDUSTRIAL <span style="color: red;">PACKAGING</span></i></h5></b> --}}
                    <p>DESKRIPSI</p>
                  </div>
                  <div class="col">
                    <img class="ip" style="width: 80dvw; max-width: 500px; height: 100%" src="{{asset('/assets/images/about_us/visi.png')}}" alt="">
                  </div>
                </div>
            </div>
        </div>   
    </div>
</section>


@include('layouts.footer')



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
