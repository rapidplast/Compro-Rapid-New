@include('layouts.navbar_admin')
 
@section('title')
    Carrier
@endsection

@section('content')
    <link rel="stylesheet" href="{{url('public/assets/css/admin/carrierr.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="top-text">
        <h1 class="join-team-header">Join <span class="highlight">Our Team</span></h1>
    </div>

    <div class="container text-end position-relative">
        <a href="{{ route('create') }}"><button class="btn btn-danger create-button position-absolute top-0 end-0 me-4 mt-4">
                <i class="bi bi-tools"></i> Create
            </button></a>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorAlert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    <div class="container job-listings mt-5" style="padding-top: 50px;">
        @foreach ($carriers as $carrier)
            <div class="card mb-4 p-4 job-card shadow-sm">
                <div class="row g-0 align-items-center">
                    <div class="col-md-8">
                        <h5 class="card-title">{{ $carrier->penempatan }}: <span
                                class="highlight">{{ $carrier->jenis }}</span>
                        </h5>
                        <p class="card-text">
                            {{ $carrier->jobdesk }}
                        </p>
                        <!-- See More Button -->
                        <button type="button" class="btn btn-danger mb-3"
                            onclick="window.location.href='{{ url('carrier/see_more/' . $carrier->id) }}';">See More</button>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="{{asset('storage/foto/' . $carrier->foto)}}" class="img-fluid rounded mb-3"
                            alt="{{$carrier->jobdesk}}">
                        <div class="d-flex justify-content-center">
                            <!-- Delete Button -->
                            <form action="{{route('delete', $carrier->id)}}" method="GET">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-secondary delete-btn me-2" type="submit">
                                    <i class="bi bi-trash-fill"></i> Delete
                                </button>
                            </form>
                            <!-- Update Button -->
                            <a href="{{ route('update_carrier', $carrier->id) }}" class="btn btn-primary update-btn">
                                <i class="bi bi-gear-fill"></i> Update
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <!-- Animation Script -->
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

        setTimeout(function() {
            const successAlert = document.getElementById('successAlert');
            const errorAlert = document.getElementById('errorAlert');

            if (successAlert) {
                successAlert.classList.remove('show');
                successAlert.classList.add('fade');
            }

            if (errorAlert) {
                errorAlert.classList.remove('show');
                errorAlert.classList.add('fade');
            }
        }, 5000);
    </script>

    @include('layouts.footer')

