<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Join Our Team</title>
  <link rel="stylesheet" href="{{ asset('assets/css/carrier.css') }}" />
  <link rel="icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body class="career-page">
  {{-- NAVBAR --}}
  @include('layouts.navbar')

  {{-- HEADER SECTION --}}
  <header class="career-header">
    <div class="header-overlay">
      <h1>JOIN <b>OUR TEAM</b></h1>
      <p>Be part of a dynamic and innovative team driving the future of packaging.</p>
    </div>
  </header>

  {{-- CONTENT SECTION --}}
  <main class="career-container">
    @if ($carriers->isEmpty())
      <div class="no-vacancy">
        There are no job vacancies available at the moment.<br />
        Please stay tuned for upcoming opportunities.
      </div>
    @else
      @foreach ($carriers as $carrier)
        <div class="career-card">
          <img src="{{ asset('storage/foto/' . $carrier->foto) }}" alt="Job Image" />
          <div class="card-details">
            <h2>{{ $carrier->penempatan }}: <span>{{ $carrier->jenis }}</span></h2>
            <p>{{ $carrier->jobdesk }}</p>
            <a href="{{ url('carrier/see_more/' . $carrier->id) }}" class="see-more-btn">See More</a>
          </div>
        </div>
      @endforeach
    @endif
  </main>

  {{-- FOOTER --}}
  @include('layouts.footer')

</body>
</html>
