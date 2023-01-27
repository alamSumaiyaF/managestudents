<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <br>
    <h1>Student Information</h1>
<table class="table table-striped">
    <thead>
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Photo</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($infos as $info)
<tr>
        <td>{{$info['id']}}</td>
        <td>{{$info['name']}}</td>
        <td>{{$info['phone']}}</td>
        <td>{{$info['email']}}</td>>
        <td><img src="{{asset('studentphotos/'.$info['image'])}}" width="80px" height="80px"></td>>
        <td><a href={{"UpdateInfo/".$info['id']}}>Update</a></td>
        <td><a href={{"DeleteInfo/".$info['id']}}>Delete</a></td>
    
</tr>
@endforeach
    </tbody>
  </table>

</body>
</html>
</body>
</html>