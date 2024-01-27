
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CLASSROOMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar')
<div class="container">
  <h2>CLASSROOMS LIST</h2>
  <p></p>
  <table class="table table-striped">
    <thead style="background-color: rgb(247, 175, 88)">
      <tr>

        <th>ID</th>
        <th>ClassesName</th>
        <th>price</th>
        <th>Classes Age</th>
        <th>Time</th>
        <th>Capacity</th>
        <th>Image</th>
        <th>Teacher Name</th>

        <th>Published</th>

        <th>created_at</th>
        <th>updated_at</th>

      </tr>
    </thead>
    <tbody>

      <tr>

        <td style="background-color: rgb(149, 151, 149)">{{$classRoom->id}}</td>
        <td>{{$classRoom->classesName}}</td>
        <td>{{$classRoom->price}}</td>
        {{-- <td>{{ date('d-m-Y', strtotime($classRoom->designation)) }}</td> --}}
        <td>{{$classRoom->classesAge}}</td>
        <td>{{$classRoom->time}}</td>
        <td>{{$classRoom->capacity}}</td>
        <td><img src="{{ asset('assets/images/'.$classRoom->image)}}" alt="Testimonial" style="width:150px;height:150px;"></td>
        <td>{{$classRoom->teacher->TeachersName}}</td>
        {{-- <td>{{$classRoom->published}}</td> --}}
        <td style="background-color: rgb(140, 192, 245)">
            @if($classRoom->published)
                Yes
            @else
                No
            @endif
        </td>
        {{-- <td><{{$classRoom->image}}</td> --}}

        <td>{{$classRoom->created_at}}</td>
        <td>{{$classRoom->updated_at}}</td>

      </tr>


    </tbody>
  </table>
</div>

</body>
</html>
