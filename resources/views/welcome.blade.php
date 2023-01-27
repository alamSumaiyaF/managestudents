<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{url('/StudentInfo')}}" style="color:;font-weight:bold;">Student Information</a><br>
    <a href="{{url('/CreateStudentInfo')}}" style="color:;font-weight:bold;">
        Create Student Information in "students" table</a><br>
    <a href="{{url('/InputStudentMark')}}" style="color:;font-weight:bold;">Input Student Mark in "marks" table</a>
    <span>  Marks of all the subjects of all the students , if soemone gets less than 33 ,then  
        "Failed" will be written with Mark & if someone gets the highest mark then 
        "Highest" will be written with Mark.
    </span><br>
    <a href="{{url('/Mark')}}" style="color:;font-weight:bold;">
        Show Mark from "marks" table</a><span>SEARCH option is available</span><br>
    <a href="{{url('/MarkSheet')}}" style="color:;font-weight:bold;">Show MarkSheet individually</a>
    <span> by making a "one to many" relationship with "students" & "marks" table
         it makes individual MarkSheet of Each student . SEARCH option is available</span><br>
    <a href="{{url('/TotalMark')}}" style="color:;font-weight:bold;">Getting Total Marks & Merit</a>
    <span>By using queries on "marks" table this page gets Total Marks & Merit position of each student</span><br>
    <a href="{{url('/InputTotal')}}" style="color:;font-weight:bold;">Enter Total Marks in Database</a>
    <span>Enter the Total Marks gathered from queries, in Database "totals" table ,means you will have to enter the data 
        which you have got from queries on "marks" table in new table "totals".
    This means if any Mark is added or updated in "marks" table , you will have to update this "totals" table</span><br>
    <a href="{{url('/Total')}}" style="color:;font-weight:bold;">Showing Total Marks from "totals" table</a><br>
    <a href="{{url('/FinalResult')}}" style="color:;font-weight:bold;">FinalResult</a><span>By "joining" 2 tables "marks" & "totals" </span><br>

</body>
</html>
