<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Our Team</title>
    <link rel="stylesheet" href="{{asset('assets/css/carrier.css')}}">
    <link rel="icon" href="{{asset('assets/images/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <div class="header" style="background-color: red; color: white; padding: 20px; text-align: center;">
        <h1>Join <span style="color: rgb(254, 255, 254);">Our Team</span></h1>
    </div>

    <div style="padding-top: 60px; padding-left: 30px; font-size: 30px">
        <a href="{{url('/about_us')}}"><i class="icon fa-solid fa-angle-left" style="color: purple;"></i></a>
        <div class="back-button">
    </div>
    </div>

    <div class="container">
        @if ($carriers->isEmpty())
            <div style="
                margin: 50px auto;
                padding: 40px;
                text-align: center;
                background-color: white;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                border-radius: 12px;
                font-size: 20px;
                max-width: 600px;
                color: #555;">
                There are no job vacancies available at the moment.<br>
                Please stay tuned for upcoming opportunities.
            </div>
        @else
            @foreach ($carriers as $carrier)
                <div class="card">
                    <img src="{{('storage/foto/' . $carrier->foto)}}" alt="Foto Jobdesk">
                    <div class="card-content">
                        <h2>{{ $carrier->penempatan }}: <span style="color: red;">{{ $carrier->jenis }}</span></h2>
                        <p>{{ $carrier->jobdesk }}</p>
<<<<<<< HEAD
                        <a href="{{ url('carrier/see_more/' . $carrier->id) }}" class="btn">See More</a>
=======
                        <a href="/carrier/see_more/{{$carrier->id}}" class="btn">See More</a>
>>>>>>> b9ae55a2b27ad3c1b319d99fcda2f0e53122d126
                    </div>
                </div>
            @endforeach
        @endif
    </div>

</body>

</html>
