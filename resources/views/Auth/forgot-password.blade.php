<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>

    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        @if ($errors->has('email'))
            <div>{{ $errors->first('email') }}</div>
        @endif
        <button type="submit">Send Password Reset Link</button>
    </form>
</body>
</html>
