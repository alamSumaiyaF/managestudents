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
  <h2>Save the Student Information</h2>
  <form action="/CreateStudent" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="id">Student ID</label>
      <input type="text" class="form-control" id="id" placeholder="Enter student id" name="id">
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter student name" name="name">
    </div>
    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
    <label for="image">Photo</label>
      <input type="file" class="form-control" id="image" name="image">
    </div>
    
    <button type="submit" class="btn btn-primary">SAVE</button>
  </form>
<body>
    
</body>
</html>