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
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">name</label><br>
        <input type="text" name="name" value="{{ $student->name }}"><br>
        <br>
        <label for="">phone</label><br>
        <input type="number" name="phone" value="{{ $student->phone }}"><br>
        <br>
        <select name="group_id" id="">
            @foreach($groups as $group)
            @if($group->id == $student->group_id)
            <option selected value="{{ $group->id }}">
                {{ $group->name }}
            </option>
            @else{
                <option value="{{ $group->id }}">
                    {{ $group->name }}
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