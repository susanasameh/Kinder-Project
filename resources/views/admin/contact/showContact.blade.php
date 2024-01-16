<!DOCTYPE html>
<html lang="en">
<head>
  <title>ContactS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.navbar')
<div class="container">
  <h2>Contact</h2>
  <p></p>
  <table class="table table-striped">
    <thead style="background-color: rgb(247, 175, 88)">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>created_at</th>
        <th>updated_at</th>


      </tr>
    </thead>
    <tbody>


      <tr>
        <td style="background-color: rgb(149, 151, 149)">{{$contact->id}}</td>
        <td>{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->subject}}</td>
        <td>{{$contact->message}}</td>
        <td>{{$contact->created_at}}</td>
        <td>{{$contact->updated_at}}</td>


      </tr>


    </tbody>
  </table>
</div>

</body>
</html>
