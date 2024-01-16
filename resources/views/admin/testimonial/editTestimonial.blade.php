<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Testimonial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container">
        <h2>Add New Testimonial</h2>
        <form action="{{route('updateTestimonial',$testimonial->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$testimonial->name}}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="profession">Profession:</label>
                <input type="text" class="form-control" id="profession" placeholder="Enter profession" name="profession" value="{{$testimonial->profession}}">
                @error('profession')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="testimonial">Description:</label>
                <textarea class="form-control" name="description" id="" cols="60" rows="3">{{$testimonial->description}}</textarea>
                @error('description')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="{{asset('assets/images/'.$testimonial->image)}}" alt="car" style="width:200px;">
                @error('image')
                    {{ $message }}
                @enderror
            </div>

            <input type="hidden" name="oldImage" value="{{$testimonial->image}}">

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="published" @checked($testimonial->published)> Published</label>
                </div>
            </div>
            <button type="submit" name="update" class="btn btn-default">update</button>
        </form>
    </div>
</body>
</html>
