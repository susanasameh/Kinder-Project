 <!DOCTYPE html>
 <html lang="en">
 <head>
     <title>Add ClassRoom</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 </head>
 <body>
     @include('admin.includes.navbar');
     <div class="container">
         <h2>Add New ClassRoom</h2>
         <form action="{{route('storeClassRoom')}}" method="post" enctype="multipart/form-data">
             @csrf

             <div class="form-group">
                 <label for="name">ClassRooms Name:</label>
                 <input type="text" class="form-control" id="name" placeholder="Enter name" name="classesName" value="{{ old('classesName') }}">
                 @error('classesName')
                     {{ $message }}
                 @enderror
             </div>

             <div class="form-group">
                 <label for="price">price:</label>
                 <input type="text" class="form-control" id="price" placeholder="Enter the time" name="price" value="{{ old('price') }}">
                 @error('price')
                     {{ $message }}
                 @enderror
             </div>


             <div class="form-group">
                 <label for="classesAge">classesAge:</label>
                 <input type="text" class="form-control" id="classesAge" placeholder="Enter classesAge" name="classesAge" value="{{ old('classesAge') }}">
                 @error('classesAge')
                     {{ $message }}
                 @enderror
             </div>

             <div class="form-group">
                 <label for="time">time:</label>
                 <input type="text" class="form-control" id="time" placeholder="Enter time" name="time" value="{{ old('time') }}">
                 @error('time')
                     {{ $message }}
                 @enderror
             </div>

             <div class="form-group">
                 <label for="capacity">capacity:</label>
                 <input type="text" class="form-control" id="capacity" placeholder="Enter capacity" name="capacity" value="{{ old('capacity') }}">
                 @error('capacity')
                     {{ $message }}
                 @enderror
             </div>

             <div class="form-group">
                 <label for="image">Image:</label>
                 <input type="file" class="form-control" id="image" name="image">
                 @error('image')
                     {{ $message }}
                 @enderror
             </div>

             <div class="form-group">
                <label for="teacher_id">Teacher:</label>
                <div class="form-group">
                    <select name="teacher_id">
                        <option value="">Choose a teacher</option>
                        @foreach($teacher as $teach)
                            <option value="{{ $teach->id }}" @selected(old('teacher_id') == $teach->id)>{{ $teach->TeachersName }}</option>
                        @endforeach
                    </select>
                </div>
                @error('teacher_id')
                    {{ $message }}
                @enderror
            </div>
             <div class="form-group">
                 <div class="checkbox">
                     <label><input type="checkbox" name="published" @checked(old('published'))> Published</label>
                 </div>
             </div>
             <button type="submit" class="btn btn-default">Insert</button>
         </form>
     </div>

 </body>
 </html>
