<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    * { box-sizing: border-box; font-family: 'Roboto', sans-serif; margin:0; padding:0; }
    body { display: flex; justify-content: center; align-items: center; height: 100vh; background:#f5f5f5; }
    .card { background:#fff; padding:40px 30px; border-radius:16px; box-shadow:0 8px 24px rgba(0,0,0,0.15); width:100%; max-width:400px; }
    .card h2 { text-align:center; margin-bottom:20px; color:#333; }
    .card p { font-size:14px; color:#666; margin-bottom:20px; text-align:center; }
    .input-group { position:relative; margin-bottom:20px; }
    .input-group input { width:100%; padding:12px 40px 12px 12px; border:1px solid #ccc; border-radius:8px; font-size:14px; transition:.3s; }
    .input-group input:focus { border-color:#6200ee; box-shadow:0 0 6px rgba(98,0,238,.2); outline:none; }
    .input-group i { position:absolute; right:12px; top:50%; transform:translateY(-50%); color:#888; }
    .btn { width:100%; padding:12px; border:none; border-radius:8px; font-size:16px; cursor:pointer; transition:.3s; display:block; text-align:center; text-decoration:none; }
    .btn-primary { background:#6200ee; color:#fff; margin-bottom:12px; }
    .btn-primary:hover { background:#4b00b5; }
    .btn-secondary { background:#e0e0e0; color:#333; }
    .btn-secondary:hover { background:#d5d5d5; }
  </style>
</head>
<body>
<div class="card">
  <h2>Forgot Password</h2>
  <p>Enter your email and we’ll send you a password reset link.</p>

  <!-- Session Status -->
  @if (session('status'))
    <div style="color:green; margin-bottom:12px; font-size:14px;">{{ session('status') }}</div>
  @endif

  <form method="POST" action="{{ route('password.email') }}">
    @csrf
    <div class="input-group">
      <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
      <i class="fa-solid fa-envelope"></i>
      @error('email') <small style="color:red;">{{ $message }}</small> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Email Password Reset Link</button>
  </form>

  <!-- Back to Login -->
  <a href="{{ route('login') }}" class="btn btn-secondary">Back to Login</a>
</div>
</body>
</html>
