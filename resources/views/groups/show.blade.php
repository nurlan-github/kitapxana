<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Students</h1>
    <table border="1">
        <tr>
            <td>#</td>
            <td>name</td>
            <td>phone</td>
            <td>group</td>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>