<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<nav class="navbar" data-bs-theme="dark" style="height: 60px; background-color: #524A4E; "></nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Konten teks -->
            <div class="teks text-center mt-4">
                <h2 style=" font-weight: 700;">Login <span class="highlight">Admin</span></h2>
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="width: 200px; padding-top: 20px;">
            </div>

            <!-- Konten form -->
            <div class="form mt-4">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" required value="{{ old('email') }}">
                    </div>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label for="inputPassword5" class="form-label fw-bold">Password</label>
                        <div class="position-relative">
                            <input type="password" id="inputPassword5" class="form-control" name="password" required>
                            <span id="togglePassword" class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
                                👁️
                            </span>
                        </div>
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-secondary" style="border-radius: 30px; width: 90px;">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordField = document.getElementById('inputPassword5');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        // Optionally change the eye icon (you can use a different icon or approach here)
        this.textContent = type === 'password' ? '👁️' : '🙈';
    });
</script>
