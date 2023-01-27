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
<div class="container">
  <h2>Update Total Marks</h2>
  <form action="/UpdateTotal" method="POST">
    @csrf
    <div class="form-group">
      <input type="hidden" class="form-control" id="id" value="{{$total['id']}}" name="id">
    </div>
    <div class="form-group">
      <label for="student_id">Student IDr</label>
      <input type="text" class="form-control" id="student_id" value="{{$total['student_id']}}" name="student_id">
    </div>
    <div class="form-group">
      <label for="name">Student Name</label>
      <input type="text" class="form-control" id="name" value="{{$total['name']}}" name="name">
    </div>
    <div class="form-group">
      <label for="total">total mark</label>
      <input type="text" class="form-control" id="total" value="{{$total['total']}}" name="total">
    </div>
    <div class="form-group">
      <label for="merit">Merit Position</label>
      <input type="text" class="form-control" id="merit" value="{{$total['merit']}}" name="merit">
    </div>
    
    <button type="submit" class="btn btn-primary">UPDATE</button>
  </form>
<body>
    
</body>
</html>