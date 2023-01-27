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
  <h2>MARK submission gained by each student in each subject</h2>
  <form action="/InputStudent" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Student Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter student name" name="name">
    </div>
    <div class="form-group">
      <label for="student_id">Student ID</label>
      <input type="text" class="form-control" id="student_id" placeholder="Enter student ID" name="student_id">
    </div>
    <div class="form-group">
      <label for="subject">Subject Name</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter subject name" name="subject">
    </div>
    <div class="form-group">
      <label for="mark_acquired">Mark</label>
      <input type="text" class="form-control" id="mark_acquired" placeholder="Enter mark" name="mark_acquired">
    </div>
    <div class="form-group">
      <label for="highest_mark">Highest Mark</label>
      <input type="text" class="form-control" id="highest_mark" placeholder="Highest mark" name="highest_mark">
    </div>
    
    <button type="submit" class="btn btn-primary">SAVE</button>
  </form>
<body>
    
</body>
</html>