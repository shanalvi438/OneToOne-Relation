<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
</head>
<body>
    <form method="POST" action="{{ route('settings.update') }}">
        @csrf
        <input type="text" name="name" value="{{ $user->name }}" placeholder="Name">
        <input type="email" name="email" value="{{ $user->email }}" placeholder="Email">
        <input type="password" name="password" placeholder="New Password">
        <button type="submit">Update Settings</button>
    </form>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
</body>
</html>
