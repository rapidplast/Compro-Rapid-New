<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin/create_carrier.css')}}">
<nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="height: 60px; background-color: #524A4E"></nav>

<div class="container">
    <div class="row justify-content-center">
        <div style="padding-top: 60px; padding-left: 30px ; font-size: 30px">
            <a href="/admin/carrier"><i class="icon fa-solid fa-angle-left"></i></a>
        </div>
        <div class="col-12 text-center mb-4">
            <h1 class="headline" style="font-size: 1.5rem;">Create Carrier</h1>
        </div>
        @if ($errors->any())
            <div class="position-fixed" style="bottom: 16px; right: 16px; width: 400px; z-index:10">
                <ul class="list-unstyled">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="position-fixed" style="bottom: 16px; right: 16px; width: 400px; z-index:10">
                <ul class="list-unstyled">
                    <li>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </li>
                </ul>
            </div>
        @endif

        <div class="col-12 col-md-8">
            <form action="{{route('product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="Personal Care">Personal Care</option>
                        <option value="Pharmacy">Pharmacy</option>
                        <option value="Dairly">Dairly</option>
                        <option value="Adibble Oil">Adibble Oil</option>
                        <option value="Galon Cap">Galon Cap</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="foto" id="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-12 text-center mt-4">
            <p class="end-teks" style="font-size: 1rem; color: black"><b>LET’S JOIN US <span class="highlight">NOW !</span></b></p>
        </div>
    </div>
</div>


<script>
    function addQualification(button) {
        const container = document.getElementById('qualification-container');

        const newInputGroup = document.createElement('div');
        newInputGroup.classList.add('input-group', 'mt-3');

        const textarea = document.createElement('textarea');
        textarea.classList.add('form-control', 'qualification-input');
        textarea.style.border = '1px black solid';
        textarea.placeholder = 'Masukkan kualifikasi di sini...';
        textarea.name = 'kualifikasi[]';

        const plusButton = document.createElement('button');
        plusButton.type = 'button';
        plusButton.classList.add('btn', 'btn-outline-secondary');
        plusButton.textContent = '+';
        plusButton.onclick = function() {
            addQualification(this);
        };

        const minusButton = document.createElement('button');
        minusButton.type = 'button';
        minusButton.classList.add('btn', 'btn-outline-danger', 'ms-2');
        minusButton.textContent = '-';
        minusButton.onclick = function() {
            removeQualification(newInputGroup);
        };

        newInputGroup.appendChild(textarea);
        newInputGroup.appendChild(plusButton);
        newInputGroup.appendChild(minusButton);

        container.appendChild(newInputGroup);
    }

    function removeQualification(inputGroup) {
        inputGroup.remove();
    }

    // Menghilangkan alert setelah 5 detik
    setTimeout(function() {
        const alerts = document.querySelectorAll('.alert');
        alerts.forEach(alert => {
            alert.classList.remove('show');
            alert.classList.add('fade');
        });
    }, 5000);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@include('layouts.footer')