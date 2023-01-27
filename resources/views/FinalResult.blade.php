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
  
    <h2>Final Result</h2>

<table class="table table-striped">
    <thead>
        
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Total Mark</th>
        <th>Merit Position</th>
        <th>phone</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($results as $result)

<tr>   
        <td>{{$result->student_id}}</td> 
        <td>{{$result->name}}</td>
        <td>{{$result->total}}</td>
        <td>{{$result->merit}}</td>
        <td>{{$result->phone}}</td>
        <td>{{$result->email}}</td>
        <td><img src="{{asset('studentphotos/'.$result->image)}}" width="70px" height="70px"></td>    
    
</tr>
@endforeach
    </tbody>
  </table>

</body>
</html>
</body>
</html>