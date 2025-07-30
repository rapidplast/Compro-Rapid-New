<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Our Team</title>
    <link rel="stylesheet" href="{{asset('assets/css/carrier_see_more.css')}}">
    <link rel="icon" href="{{asset('assets/images/logo.jpg')}}" type="image/x-icon">
</head>

<body>

    <div class="container">
        {{-- @foreach ($carriers as $carrier) --}}
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="header">
                <h1>{{ $carrier->penempatan }}: <span class="highlight">{{ $carrier->jenis }}</span></h1>
            </div>
        </nav>

        <div class="image-container">
            {{-- <img src="{{asset('assets/images/Carrier/image.png')}}" alt="Programmer at work"> --}}
            <img src="{{asset('storage/foto/' . $carrier->foto)}}" class="img-fluid rounded mb-3"
                alt="{{$carrier->jobdesk}}">
        </div>

        <div class="content">
                        <h2>Qualifications :</h2>
            <ul>
                @foreach ($carrier->kualifikasi as $qualification)
                    <li>{{ $qualification }}</li>
                @endforeach
            </ul>
            <h2>Jobdesc :</h2>
            <p>{{ $carrier->jobdesk }}.</p>
        </div>

        <div class="footer">
            <p>Please submit your updated CV to:</p>
            <p><strong>recruitment@rapidplast.com</strong></p>
            <p>with email subject: Programmer</p>
        </div>
        {{-- @endforeach --}}
    </div>

</body>

</html>
