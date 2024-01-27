<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teachers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar')
<div class="container">
  <h2>Teachers LIST</h2>
  <p></p>
  <table class="table table-striped">
    <thead style="background-color: rgb(247, 175, 88)">
      <tr>

        <th>ID</th>
        <th>TeachersName</th>
        <th>Designation</th>
        <th>facebook</th>
        <th>twitter</th>
        <th>instagram</th>
        <th>Image</th>
        <th>Published</th>
        <th>created_at</th>
        <th>updated_at</th>

      </tr>
    </thead>
    <tbody>


      <tr>

        <td style="background-color: rgb(149, 151, 149)">{{$teacher->id}}</td>
        <td>{{$teacher->TeachersName}}</td>
        <td>{{$teacher->designation}}</td>
        <td>{{$teacher->facebook}}</td>
        <td>{{$teacher->twitter}}</td>
        <td>{{$teacher->instagram}}</td>
        <td><img src="{{ asset('assets/images/'.$teacher->image)}}" alt="Teacher" style="width:150px;height:150px;"></td>
        {{-- <td>{{$data->published}}</td> --}}
        <td style="background-color: rgb(140, 192, 245)">
            @if($teacher->published)
                Yes
            @else
                No
            @endif
        </td>
        {{-- <td><{{$data->image}}</td> --}}

        <td>{{$teacher->created_at}}</td>
        <td>{{$teacher->updated_at}}</td>

      </tr>


    </tbody>
  </table>
</div>

</body>
</html>
