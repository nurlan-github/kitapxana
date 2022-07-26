<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>#</td>
            <td>name</td>
        </tr>
        @foreach($groups as $group)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $group->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>