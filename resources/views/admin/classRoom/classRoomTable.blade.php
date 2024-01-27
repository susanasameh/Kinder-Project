
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
            <th>Edit</th>
            <th>show</th>
            <th>Delete</th>

          </tr>
        </thead>
        <tbody>

            @foreach($classRoom as $data)
          <tr>

            <td style="background-color: rgb(149, 151, 149)">{{$data->id}}</td>
            <td>{{$data->classesName}}</td>
            <td>{{$data->price}}</td>
            {{-- <td>{{ date('d-m-Y', strtotime($classRoom->designation)) }}</td> --}}
            <td>{{$data->classesAge}}</td>
            <td>{{$data->time}}</td>
            <td>{{$data->capacity}}</td>
            <td><img src="{{ asset('assets/images/'.$data->image)}}" alt="Testimonial" style="width:150px;height:150px;"></td>
            <td>{{$data->teacher->TeachersName}}</td>

            <td style="background-color: rgb(140, 192, 245)">
                @if($data->published)
                    Yes
                @else
                    No
                @endif
            </td>
            {{-- <td><{{$data->image}}</td> --}}

            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
            <td><a href="editClassRoom/{{ $data->id }}" style="
                background-color: rgb(133, 79, 234);
                  color: rgb(255, 254, 254);
                  padding: 14px 25px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                 hover:active;
                hover.active.background-color: rgb(133, 79, 234);
                border-radius: 50%;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);


              ">Edit</a></td>
            <td><a href="showClassRoom/{{ $data->id }}" style="background-color: rgb(79, 234, 154);;
                color: rgb(14, 11, 11);
                padding: 14px 25px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
               hover:active;
              hover.active.background-color: rgb(133, 79, 234);
              border-radius: 50%;
              box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

                ">Show</a></td>
            {{-- <td><a href="deleteCar/{{ $data->id }}">Delete</a></td> --}}
            <td><a href="deleteClassRoom/{{ $data->id }}" onclick="return confirm('Are you sure you want to delete?')" style="
                background-color: rgb(237, 8, 8);
                  color: rgb(255, 254, 254);
                  padding: 14px 25px;
                  text-align: center;
                  text-decoration: none;
                  display: inline-block;
                 hover:active;
                hover.active.background-color: rgb(133, 79, 234);
                border-radius: 50%;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

      ">Delete</a></td>
          </tr>
           @endforeach

        </tbody>
      </table>
    </div>

    </body>
    </html>
