<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container">
        <h2>Add New Contact</h2>
        <form action="{{route('storeContact')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ old('name') }}">
                @error('name')
                    {{ $message }}
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
                @error('email')
                    {{ $message }}
                @enderror
            </div>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" value="{{ old('subject') }}">
                @error('subject')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="appointment">Message:</label>
                <textarea class="form-control" name="message" id="" cols="60" rows="3">{{ old('message') }}</textarea>
                @error('message')
                    {{ $message }}
                @enderror
            </div>


            <button type="submit" class="btn btn-default">Insert</button>
        </form>
    </div>
</body>
</html>
