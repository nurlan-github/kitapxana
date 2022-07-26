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
    <form action="{{ route('books.update', $books) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">name</label><br>
        <input type="text" name="name" value="{{ $books->name }}"><br>
        <br>
        <input type="number" name="count" value="{{ $books->count }}"><br>
        <br>
        <select name="category_id" id="">
            @foreach($categories as $category)
            @if($category->id == $books->category_id)
            <option selected value="{{ $category->id }}">
                {{ $category->name }}
            </option>
            @else{
                <option value="{{ $category->id }}">
                    {{ $category->name }}
                </option>
            }
            @endif
            @endforeach
        </select><br><br>
        <select name="author_id" id="">
            @foreach($authors as $author)
            @if($author->id == $books->author_id)
            <option selected value="{{ $author->id }}">
                {{ $author->name }}
            </option>
            @else{
                <option value="{{ $author->id }}">
                    {{ $author->name }}
                </option>
            }
            @endif
            @endforeach
        </select><br><br>
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