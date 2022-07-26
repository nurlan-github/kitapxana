<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Students</h1>
    <table border="1">
        <tr>
            <td>#</td>
            <td>name</td>
            <td>phone</td>
            <td>group</td>
            <td>edit</td>
            <td>delete</td>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $loop->iteretion }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            @foreach($groups as $group)
                @if($tudent->group_id == $group->id)
            <td>
                {{ $group->name }}
            </td>
            @endif
            @endforeach
            <td><button><a href="{{ route('students.show',$student->id) }}">edit</a></button></td>
            <td>
                <form action="{{ route('students.destroy',$student) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>