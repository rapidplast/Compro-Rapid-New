<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="{{ url('public/assets/css/admin/update_carrier.css') }}">

<nav class="navbar navbar-dark" style="height: 60px; background-color: #524A4E"></nav>


<div style="padding-top: 60px; padding-left: 30px ; font-size: 30px">
    <a href="{{ url('admin/carrier') }}"><i class="icon fa-solid fa-angle-left"></i></a>
</div>
<div class="headline text-center mb-4">
    <p class="h4">Update Carrier</p>
</div>
@if ($errors->any())
    <div class="position-fixed" style="bottom: 16px; right: 16px; width: 400px; z-index:10">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </li>
        </ul>
    </div>
@endif

<form action="{{ route('update_carrier', $carrier->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
        <div class="w-100 d-flex flex-column align-items-center" style="max-width: 945px;">
            <div class="mb-3 w-100">
                <label for="jenisPekerjaan" class="form-label fw-bold">Jenis Pekerjaan</label>
                <input type="text" class="form-control" id="jenisPekerjaan" style="border: 1px solid black;"
                    name="jenis" value="{{ $carrier->jenis }}">
            </div>
            <div class="mb-3 w-100">
                <label for="penempatan" class="form-label fw-bold">Penempatan</label>
                <input type="text" class="form-control" id="penempatan" style="border: 1px solid black;"
                    name="penempatan" value="{{ $carrier->penempatan }}">
            </div>
            <div class="mb-3 w-100">
                <label for="keteranganJobdesck" class="form-label fw-bold">Keterangan Jobdesck</label>
                <input type="text" class="form-control" id="keteranganJobdesck" style="border: 1px solid black;"
                    name="jobdesk" value="{{ $carrier->jobdesk }}">
            </div>

            <div id="qualification-container" class="mb-3 w-100">
                <label for="qualifications" class="form-label fw-bold">Kualifikasi</label>
                @foreach ($carrier->kualifikasi as $index => $qualification)
                    <div class="input-group mb-3 qualification-group">
                        <input type="text" class="form-control" name="kualifikasi[]" value="{{ $qualification }}"
                            style="border: 1px solid black;">

                        <button type="button" class="btn btn-outline-secondary"
                            onclick="removeQualification(this)">-</button>
                        <button type="button" class="btn btn-outline-secondary"
                            onclick="addQualification(this)">+</button>
                    </div>
                @endforeach
            </div>

            <div id="image-input-container" class="w-100">
                <div class="mb-3 w-100">
                    <label for="inputGambar1" class="form-label text-dark fw-bold">Gambar</label>
                    <div id="previewZone" class="d-flex align-items-center">
                        <img src="{{ !empty($carrier->foto) ? asset('storage/foto/' . $carrier->foto) : url('public/assets/images/userdefault.png') }}"
                            class="rounded-circle" width="100" height="100" alt="Profile Logo" id="gambarKanan">
                        <button type="button" class="btn btn-danger ms-3" id="removeImageButton">Remove</button>
                    </div>
                    <input type="file" class="form-control mt-3" id="inputGambar1" accept="image/*"
                        style="border: 1px solid black;" name="foto">
                </div>
            </div>

            <button type="submit" class="btn btn-secondary"
                style="border-radius: 30px; width: 90px;">Update</button>
        </div>
    </div>
</form>

<div class="end-teks text-center mt-4">
    <p class="h5"><b>LET’S JOIN US <span class="highlight">NOW!</span></b></p>
</div>

<script>
    function addQualification(button) {
        const container = document.getElementById('qualification-container');

        const newInputGroup = document.createElement('div');
        newInputGroup.classList.add('input-group', 'mb-3', 'qualification-group');

        const input = document.createElement('input');
        input.type = 'text';
        input.classList.add('form-control');
        input.style.border = '1px solid black';
        input.placeholder = 'Masukkan kualifikasi di sini...';
        input.name = 'kualifikasi[]';

        const minusButton = document.createElement('button');
        minusButton.type = 'button';
        minusButton.classList.add('btn', 'btn-outline-secondary');
        minusButton.textContent = '-';
        minusButton.onclick = function() {
            removeQualification(this);
        };

        const plusButton = document.createElement('button');
        plusButton.type = 'button';
        plusButton.classList.add('btn', 'btn-outline-secondary');
        plusButton.textContent = '+';
        plusButton.onclick = function() {
            addQualification(this);
        };

        newInputGroup.appendChild(input);
        newInputGroup.appendChild(minusButton);
        newInputGroup.appendChild(plusButton);

        container.appendChild(newInputGroup);
    }

    function removeQualification(button) {
        const inputGroup = button.closest('.qualification-group'); // Mengambil elemen terdekat
        if (inputGroup) {
            inputGroup.remove(); // Menghapus elemen input-group
        }
    }

    document.getElementById('inputGambar1').addEventListener('change', function(event) {
        const previewZone = document.getElementById('gambarKanan');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewZone.src = e.target.result; // Mengganti src dari elemen img dengan gambar baru
            }
            reader.readAsDataURL(file); // Membaca file sebagai DataURL untuk preview
        }
    });

    document.getElementById('removeImageButton').addEventListener('click', function() {
        const previewZone = document.getElementById('gambarKanan');
        const fileInput = document.getElementById('inputGambar1');

        previewZone.src = '{{ url('public/assets/images/userdefault.png') }}'; 
        fileInput.value = ''; 
    });

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