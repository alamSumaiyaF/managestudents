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
  <h3>search result .....</h3>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Mark</th>
        <th>Highest</th>
      </tr>
    </thead>
    <tbody>
        @foreach($datas as $result)
        <tr>
        <td>{{$result['student_id']}}</td>
        <td>{{$result['name']}}</td>
        <td>{{$result['subject']}}</td>
        <td>{{$result['mark_acquired']}}</td>
        <td>{{$result['highest_mark']}}</td>
        </tr>
     @endforeach
    </tbody>
  </table>
</body>
</html>