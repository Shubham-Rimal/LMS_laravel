<html lang="en">
<head>
    <title>Create</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class, 'update'])}}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$student->id}}">
    <label>Name:</label>
    <input type="text" name="name" value="{{$student->name}}" required>
    <label>Address:</label>
    <input type="text" name="address" value="{{$student->address}}" required>
    <label>Age:</label>
    <input type="number" name="age" value="{{$student->age}}" required>
    <label>Image:</label>
    <input type="file" name="image" value="{{$student->image}}" required>
    <button type="Submit">Submit</button>
</form>
</body>
</html>
