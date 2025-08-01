@if (auth()->check())
    @include('layouts.navbar_admin')
@else
    @include('layouts.navbar')
@endif
@section('title')
    Home
@endsection


@section('content')

    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="home">
            <div class="homee">
                <img src="{{asset('assets/images/home.jpg')}}" alt="Home" style="width: 100%">
            </div>
            <div class="company" style="background-image: url('{{asset('assets/images/home/kabel.jpg')}}'); background-repeat: no-repeat; background-size: cover;background-position: center 70%; width: 100%; height: 70vh; ">
                <div class="overlay" style="text-align: center; padding-top: 190px;">
                    <h2 style="color: white; font-weight: bold; font-size: 58px; ">COMPANY</h2>
                    <a href="{{ url('/about_us') }}" class="btn" style="background: #c2c6ca; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; font-size: 18px;">Learn More</a>
                </div>  
            </div>
            <div class="innovation" style="background-image: url('{{asset('assets/images/home/innovation.png')}}'); background-repeat: no-repeat; background-size: cover; width: 100%; height: 70vh; ">
                <div class="overlay" style="text-align: center; padding-top: 190px;">
                    <h2 style="color: white; font-weight: bold; font-size: 58px;">INNOVATION</h2>
                    <a href="{{ url('/inovation') }}" class="btn" style="background: #c2c6ca; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; font-size: 18px;">Learn More</a>
                </div>  
            </div>
            <div class="innovation" style="background-image: url('{{asset('assets/images/home/worker.jpg')}}'); background-repeat: no-repeat; background-size: cover;background-position: center 100%; width: 100%; height: 70vh; ">
                <div class="overlay" style="text-align: center; padding-top: 190px;">
                    <h2 style="color: white; font-weight: bold; font-size: 58px;">PRODUCT & SERVICE</h2>
                    <a href="{{ url('/product') }}" class="btn" style="background: #c2c6ca; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; font-size: 18px;">Learn More</a>
                </div>  
            </div>
            <div class="innovation" style="background-image: url('{{asset('assets/images/home/tekstil.jpg')}}'); background-repeat: no-repeat; background-size: cover; background-position: center 70%; width: 100%; height: 70vh; ">
            <div class="overlay" style="text-align: center; padding-top: 190px;">
                    <h2 style="color: white; font-weight: bold; font-size: 58px;">QUALITY COMMITMENT & SUSTAINABILITY</h2>
                    <a href="{{ url('/quality') }}" class="btn" style="background: #c2c6ca; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; font-size: 18px;">Learn More</a>
                </div>  
            </div>
            <div class="innovation" style="background-image: url('{{asset('assets/images/home/paktua.jpg')}}'); background-repeat: no-repeat; background-size: cover;background-position: center 70%; width: 100%; height: 70vh; ">
                <div class="overlay" style="text-align: center; padding-top: 190px;">
                    <h2 style="color: white; font-weight: bold; font-size: 58px;">CAREER</h2>
                    <a href="{{ url('/carrier') }}" class="btn" style="background: #c2c6ca; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; font-size: 18px;">Learn More</a>
                </div>  
            </div>
            <div class="innovation" style="background-image: url('{{asset('assets/images/home/bangunan.jpg')}}'); background-repeat: no-repeat; background-size: cover;background-position: center 55%; width: 100%; height: 70vh; ">
                <div class="overlay" style="text-align: center; padding-top: 190px;">
                    <h2 style="color: white; font-weight: bold; font-size: 58px;">CONTACT</h2>
                    <a href="{{ url('/contact_us') }}" class="btn" style="background: #c2c6ca; color: white; text-decoration: none; padding: 10px 20px; border-radius: 5px; font-weight: bold; font-size: 18px;">Learn More</a>
                </div>  
            </div>
                <div class="hero-content">
                    <!-- <p>coba</p> -->
                    <hr style="width: 50px; height: 2px; border-radius: 20px; background-color: red; border: none;">
                    <i>
                        <h2>ABOUT <span class="highlight">PT RAPID PLAST</span></h2>
                    </i>

                    <i>
                        <p>
                            August 1, 1992, established as a manufacturer of plastic packaging,
                            <br>
                            toothbrushes, and plastic tubes, which is a subsidiary of Dynapack Asia,
                            <br>
                            serving leading brands across Asia.
                        </p>
                    </i>
                </div>
            </div>
        </div>
        @include('layouts.footer')
    </section>
    
