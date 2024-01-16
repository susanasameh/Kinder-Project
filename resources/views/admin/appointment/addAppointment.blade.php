<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Appointment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar');
    <div class="container">
        <h2>Add New Appointment</h2>
        <form action="{{route('storeAppointment')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Guardian Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="guardianName" value="{{ old('guardianName') }}">
                @error('guardianName')
                    {{ $message }}
                @enderror
            </div>

            <div class="form-group">
                <label for="email">guardianEmail:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="guardianEmail" value="{{ old('guardianEmail') }}">
                @error('email')
                    {{ $message }}
                @enderror
            </div>

            <div class="form-group">
                <label for="childName">Child Name:</label>
                <input type="text" class="form-control" id="childName" placeholder="Enter childName" name="childName" value="{{ old('childName') }}">
                @error('childName')
                    {{ $message }}
                @enderror
            </div>

            <div class="form-group">
                <label for="childAge">Child Age:</label>
                <input type="text" class="form-control" id="childAge" placeholder="Enter childAge" name="childAge" value="{{ old('childAge') }}">
                @error('childAge')
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
