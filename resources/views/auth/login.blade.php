<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Material UI</title>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-aQ2j2sG0K0e2+bYyP+6B1Ot+eFv6yL9zF7G3P5kh6Yf9v7Edl+f9m+PyY/8q7Zw3Bfh0f2D+0fF6Jzv2WzT7xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
* { box-sizing: border-box; margin:0; padding:0; font-family: 'Roboto', sans-serif; }
body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #f5f5f5;
}

/* Card */
.card {
  background: #fff;
  padding: 40px 30px;
  border-radius: 16px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.15);
  width: 100%;
  max-width: 400px;
}

.card h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #333;
}

/* Input Group with Icon */
.input-group {
  position: relative;
  margin-bottom: 20px;
}

.input-group input {
  width: 100%;
  padding: 12px 40px 12px 12px; /* space for icon */
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 14px;
  transition: 0.3s;
}

.input-group input:focus {
  outline: none;
  border-color: #6200ee;
  box-shadow: 0 0 6px rgba(98,0,238,0.2);
}

.input-group i {
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);
  color: #888;
  font-size: 16px;
}

/* Options */
.options {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  font-size: 14px;
}

.options label {
  display: flex;
  align-items: center;
}

.options input[type="checkbox"] {
  margin-right: 8px;
}

.options a {
  text-decoration: none;
  color: #6200ee;
}

.options a:hover {
  text-decoration: underline;
}

/* Buttons */
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

.btn-login {
  background: #6200ee;
  color: #fff;
  margin-bottom: 12px;
}

.btn-login:hover {
  background: #4b00b5;
}

.btn-register {
  background: #e0e0e0;
  color: #333;
  display: block;
  text-align: center;
  text-decoration: none;
  line-height: 20px;
}

.btn-register:hover {
  background: #d5d5d5;
}
</style>
</head>
<body>

<div class="card">
  <h2>Login</h2>

  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="input-group">
      <input type="email" id="email" name="email" placeholder="Email" required autofocus>
      <i class="fa-solid fa-envelope"></i>
    </div>

    <div class="input-group">
      <input type="password" id="password" name="password" placeholder="Password" required>
      <i class="fa-solid fa-lock"></i>
    </div>

    <div class="options">
      <label><input type="checkbox" name="remember"> Remember me</label>
      
    </div>

    <button type="submit" class="btn btn-login">Log in</button>

    @if (Route::has('register'))
      <a href="{{ route('register') }}" class="btn btn-register">Register</a>
    @endif
  </form>
</div>

</body>
</html>
