<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <br>
        <input type="number" name="count" placeholder="count"><br>
        <br>
        <select name="category_id" id="">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
            @endforeach
        </select><br><br>
        <select name="author_id" id="">
            @foreach($authors as $author)
            <option value="{{ $author->id }}">
                {{ $author->name }}
            </option>
            @endforeach
        </select><br><br>
        <button type="submit">create</button><br>
        <br>
    </form>
</body>
</html>