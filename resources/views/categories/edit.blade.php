<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit</h2>
    <form action="{{ route('categories.update', $categories) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">name</label><br>
        <input type="text" name="name" value="{{ $categories->name }}"><br>
        <br>
        <button type="submit">update</button>
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