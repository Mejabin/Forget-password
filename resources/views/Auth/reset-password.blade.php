<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
</head>

<body>
    <h1>Reset Password</h1>
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        @if ($errors->has('email'))
        <div>{{ $errors->first('email') }}</div>
        @endif
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>
        @if ($errors->has('password'))
        <div>{{ $errors->first('password') }}</div>
        @endif
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit">Reset Password</button>
    </form>
</body>

</html>