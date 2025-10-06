<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirm Password</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>[same CSS as above]</style>
</head>
<body>
<div class="card">
  <h2>Confirm Password</h2>
  <p>This is a secure area. Please confirm your password before continuing.</p>

  <form method="POST" action="{{ route('password.confirm') }}">
    @csrf
    <div class="input-group">
      <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
      <i class="fa-solid fa-lock"></i>
      @error('password') <small style="color:red;">{{ $message }}</small> @enderror
    </div>
    <button type="submit" class="btn btn-primary">Confirm</button>
  </form>
</div>
</body>
</html>
