<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Settings</title>
</head>
<body>
    <form method="POST" action="{{ route('admin.settings.update') }}">
        @csrf
        <!-- Your settings fields go here -->
        <button type="submit">Update Settings</button>
    </form>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
</body>
</html>
