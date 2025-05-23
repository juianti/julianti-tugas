<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4">Register</h2>
    <form action="{{ url('registrasi/user') }}" method="post">
      @csrf <!-- CSRF Token Laravel -->
      
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required />
      </div>
      <div class="mb-3">
        <label for="confirm-password" class="form-label">Konfirmasi Password</label>
        <input type="password" class="form-control" id="confirm-password" name="password_confirmation" placeholder="Konfirmasi password" required />
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

  <script>
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm-password').value;
      if(password !== confirmPassword){
        e.preventDefault();
        alert('Password dan konfirmasi password tidak sama!');
      }
    });
  </script>
</body>
</html>
