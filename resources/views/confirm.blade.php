<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Request data</h1>
    <p>{{ $data }}</p>
    <form action="/complete" method="POST">
        @csrf
        <input type="submit" value="送信">
    </form>
</body>
</html>
