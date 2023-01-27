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
    <form action="/SearchMarkInfo" method="POST">
  @csrf
    <div class="row">
      <div class="col">
        <input type="search" class="form-control" id="search" placeholder="search...." name="search">
      </div>
      <div class="col">
        <button type="submit" >search</button>
      </div>
    </div>
  </form>
  <br><br><br>
    <h2>Marks</h2>

<table class="table table-striped">
    <thead>
        
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Mark</th>
        <th>Highest</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($marks as $mark)

<tr>
        <td>{{$mark['student_id']}}</td>
        <td>{{$mark['name']}}</td>
        <td>{{$mark['subject']}}</td>
        <td>{{$mark['mark_acquired']}}</td>
        <td>{{$mark['highest_mark']}}</td>
        <td><a href={{"UpdateMark/".$mark['id']}}>Update</a></td>
        <td><a href={{"DeleteMark/".$mark['id']}}>Delete</a></td>
    
</tr>
@endforeach
    </tbody>
  </table>

</body>
</html>
</body>
</html>
    