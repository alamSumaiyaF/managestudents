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
  <h2>Total Marks doing the SUM</h2>
<table class="table table-striped">
    <thead>
        
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Total Marks</th>
        <th>Merit Position</th>
      </tr>
    </thead>
    <tbody>
    @foreach($total as $sum)
      <tr>
        <td>{{$sum['student_id']}}</td>
        <td>{{$sum['name']}}</td>
        <td>{{$sum['sum(mark_acquired)']}}</td>
        <td>{{$loop->iteration}}</td>
        <!--<td><a href="{{url('save')}}"Total Marks</td>-->
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>