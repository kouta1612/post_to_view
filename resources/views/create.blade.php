<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    @if (session('flash'))
        <p>{{ session('flash') }}</p>
    @endif

    <form action="/confirm" method="POST">
        @csrf
        <input type="text" value="test" name="input">
        <input type="submit" value="確認">
    </form>
</body>
</html>
