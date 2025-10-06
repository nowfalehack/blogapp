<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>[same CSS as above]</style>
</head>
<body>
<div class="card">
  <h2>Reset Password</h2>
  <form method="POST" action="{{ route('password.store') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div class="input-group">
      <input type="email" name="email" value="{{ old('email', $request->email) }}" placeholder="Email" required>
      <i class="fa-solid fa-envelope"></i>
      @error('email') <small style="color:red;">{{ $message }}</small> @enderror
    </div>

    <div class="input-group">
      <input type="password" name="password" placeholder="New Password" required>
      <i class="fa-solid fa-lock"></i>
      @error('password') <small style="color:red;">{{ $message }}</small> @enderror
    </div>

    <div class="input-group">
      <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
      <i class="fa-solid fa-lock"></i>
      @error('password_confirmation') <small style="color:red;">{{ $message }}</small> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Reset Password</button>
  </form>
</div>
</body>
</html>
