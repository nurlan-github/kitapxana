<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Library Admin</h1>
    <ul>
        <li>
            <a href="{{ route('categories.index') }}">Categories</a>
        </li>
        <li>
            <a href="{{ route('books.index') }}">Books</a>
        </li>
        <li>
            <a href="">Authors</a>
        </li>
        <li>
            <a href="{{ route('faculties.index') }}">Faculties</a>
        </li>
        <li>
            <a href="{{ route('groups.index') }}">Groups</a>
        </li>
        <li>
            <a href="{{ route('students.index') }}">Students</a>
        </li>
        <li>
            <a href="">History</a>
        </li>
    </ul>
</body>
</html>