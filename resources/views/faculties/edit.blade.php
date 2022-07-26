<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit</h1>
    <form action="{{ route('faculties.update', $faculty) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">name</label><br>
        <input type="text" name="name" value="{{ $faculty->name }}">
        <button type="submit">update</button><br>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul >
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>