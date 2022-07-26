<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Books</h1>
    <a href="{{ route('books.create') }}">create</a><br>
    <br>
    <table border="1">
        <tr>
            <td>#</td>
            <td>name</td>
            <td>count</td>
            <td>category</td>
            <td>author</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $book->name }}</td>
            <td>{{ $book->count }}</td>
            @foreach($categories as $category)
            @if($category->id == $book->category_id)
            <td>
                {{ $category->name }}
            </td>
            @endif
            @endforeach
            @foreach($authors as $author)
            @if($author->id == $book->author_id)
            <td>
                {{ $author->name }}
            </td>
            @endif
            @endforeach
            <td>
                <button type="submit"><a href="{{ route('books.edit', $book->id)}}">edit</a></button>
            </td>
            <td>
                <form action="{{ route('books.destroy', $book) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </td>

        </tr>
        @endforeach

    </table>
</body>
</html>