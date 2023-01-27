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
  <h2>Update marks acquired by students</h2>
  <form action="/UpdateMar" method="POST">
    @csrf
    <div class="form-group">
      <input type="hidden" class="form-control" id="id" value="{{$item['id']}}" name="id">
    </div>
    <div class="form-group">
      <label for="name">Student Name</label>
      <input type="text" class="form-control" id="name" value="{{$item['name']}}" name="name">
    </div>
    <div class="form-group">
      <label for="student_id">Student ID</label>
      <input type="text" class="form-control" id="student_id" value="{{$item['student_id']}}" name="student_id">
    </div>
    <div class="form-group">
      <label for="subject">Subject Name</label>
      <input type="text" class="form-control" id="subject" value="{{$item['subject']}}" name="subject">
    </div>
    <div class="form-group">
      <label for="mark_acquired">Mark</label>
      <input type="text" class="form-control" id="mark_acquired" value="{{$item['mark_acquired']}}" name="mark_acquired">
    </div>
    <div class="form-group">
      <label for="highest_mark">Highest Mark</label>
      <input type="text" class="form-control" id="highest_mark" value="{{$item['highest_mark']}}" name="highest_mark">
    </div>
    
    <button type="submit" class="btn btn-primary">UPDATE</button>
  </form>
    
</body>
</html>