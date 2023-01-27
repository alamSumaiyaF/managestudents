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
<body><br>
<h2>Complete MarkSheet of Each Student</h2><br>
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
    <h2>Marksheet of ID 1 </h2>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Subject</th>
        <th>Mark</th>
        <th>Highest</th>
      </tr>
    </thead>
    <tbody>
        @foreach($marks1 as $mark1)
        <tr>
        <td>{{$mark1['subject']}}</td>
        <td>{{$mark1['mark_acquired']}}</td>
        <td>{{$mark1['highest_mark']}}</td>
        </tr>
     @endforeach
    </tbody>
  </table><br><br><br><br>
  <h2>Marksheet of ID 2 </h2>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Subject</th>
        <th>Mark</th>
        <th>Highest</th>
      </tr>
    </thead>
    <tbody>
        @foreach($marks2 as $mark2)
        <tr>
        <td>{{$mark2['subject']}}</td>
        <td>{{$mark2['mark_acquired']}}</td>
        <td>{{$mark2['highest_mark']}}</td>
        </tr>
     @endforeach
    </tbody>
  </table><br><br><br><br>
  <h2>Marksheet of ID 3 </h2>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Subject</th>
        <th>Mark</th>
        <th>Highest</th>
      </tr>
    </thead>
    <tbody>
        @foreach($marks3 as $mark3)
        <tr>
        <td>{{$mark3['subject']}}</td>
        <td>{{$mark3['mark_acquired']}}</td>
        <td>{{$mark3['highest_mark']}}</td>
        </tr>
     @endforeach
    </tbody>
  </table><br><br><br><br>
  <h2>Marksheet of ID 4 </h2>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Subject</th>
        <th>Mark</th>
        <th>Highest</th>
      </tr>
    </thead>
    <tbody>
        @foreach($marks4 as $mark4)
        <tr>
        <td>{{$mark4['subject']}}</td>
        <td>{{$mark4['mark_acquired']}}</td>
        <td>{{$mark4['highest_mark']}}</td>
        </tr>
     @endforeach
    </tbody>
  </table>
</body>
</html>