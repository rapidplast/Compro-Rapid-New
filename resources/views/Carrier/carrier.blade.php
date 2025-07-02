<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Our Team</title>
    <link rel="stylesheet" href="{{ asset('assets/css/carrier.css') }}">
    <link rel="icon" href="{{ asset('assets/images/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <div class="header">
        <h1>Join <span style="color: rgb(254, 255, 254);">Our Team</span></h1>
    </div>

    <div style="padding-top: 60px; padding-left: 30px; font-size: 30px">
        <a href="/"><i class="icon fa-solid fa-angle-left"></i></a>
    </div>

    <div class="container">
        @foreach ($carriers as $carrier)
            <div class="card">
                <img src="{{ asset('storage/foto/' . $carrier->foto) }}" alt="Foto Jobdesk">
                <div class="card-content">
                    <h2>{{ $carrier->penempatan }}: <span style="color: red;">{{ $carrier->jenis }}</span></h2>
                    <p>{{ $carrier->jobdesk }}</p>
                    <a href="/carrier/see_more/{{ $carrier->id }}" class="btn">See More</a>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
