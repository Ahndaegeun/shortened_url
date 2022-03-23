<html>
<head>
    <title>STU</title>
</head>
<body>
    <form action="/make" method="post">
        @csrf
        <input type="text" name="origin">
        <button type="submit">make!</button>
    </form>
</body>
</html>
