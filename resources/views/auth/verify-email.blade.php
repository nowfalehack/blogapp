<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Verification</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>[same CSS as above]</style>
</head>
<body>
<div class="card">
  <h2>Verify Email</h2>
  <p>Thanks for signing up! Please verify your email address by clicking the link we just sent.  
  Didn’t get the email? We’ll send you another.</p>

  @if (session('status') == 'verification-link-sent')
    <div style="color:green; margin-bottom:12px; font-size:14px;">
      A new verification link has been sent to your email.
    </div>
  @endif

  <form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <button type="submit" class="btn btn-primary">Resend Verification Email</button>
  </form>

  <form method="POST" action="{{ route('logout') }}" style="margin-top:10px;">
    @csrf
    <button type="submit" class="btn" style="background:#e0e0e0; color:#333;">Log Out</button>
  </form>
</div>
</body>
</html>
