<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <br>
        <input type="number" name="phone" placeholder="phone"><br>
        <br>
        <select name="group_id" id="">
            @foreach($groups as $group)
            <option value="{{ $group->id }}">
                {{ $group->name }}
            </option>
            @endforeach
        </select><br><br>
        <button type="submit">create</button><br>
        <br>
    </form>
</body>
</html>