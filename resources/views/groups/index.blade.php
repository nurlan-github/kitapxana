<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Groups</h1>
    <a href="{{ route('groups.create') }}">create</a>
    <table border="1">
        <tr>
            <td>#</td>
            <td>name</td>
            <td>view students</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
        @foreach($groups as $group)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $group->name }}</td>
            @foreach($faculties as $faculty)
            @if($group->faculty_id == $faculty->id)
            <td>
                {{ $faculty->name }}
            </td>
            @endif
            @endforeach
            <td><button type="submit"><a href="{{ route('groups.edit',$group->id) }}">edit</a></button></td>
            <td>
                <form action="{{ route('groups.destroy', $group) }}" method="POST">
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