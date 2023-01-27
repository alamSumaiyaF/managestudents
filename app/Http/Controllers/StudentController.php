<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Mark;
use App\Models\Total;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{

    public function saveStudent(Request $req)
    {
       $data=new Student;
       $data->id=$req->id;
       $data->name=$req->name;
       $data->phone=$req->phone;
       $data->email=$req->email;
       if($req->hasfile('image'))
        {
            $file = $req->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('studentphotos', $filename);
            $data->image = $filename;
        }
       $data->save();
       return "<h4>Student info has been saved successfully</h4>";
    }


    public function getInfo(){
      $data=Student::all();
      return view('StudentInfo',['infos'=>$data]);
    }


    public function deleteInfo($id)
    {
       $data=Student::find($id);
       $data->delete();
       return redirect()->back();
    }


    public function updateInfo($id)
    {
       $data=Student::find($id);
       return view('UpdateInfo',['info'=>$data]);
    }


    public function editInfo(Request $req)
    {
       $data=Student::find($req->id);
       $data->id=$req->id;
       $data->name=$req->name;
       $data->phone=$req->phone;
       $data->email=$req->email;
       if($req->hasfile('image'))
        {
            $file = $req->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('studentphotos', $filename);
            $data->image = $filename;
        }
       $data->save();
       return "<h4>Student info has been UPDATED successfully</h4>";
    }


    public function saveMark(Request $req)
    {
       $data=new Mark;
       $data->name=$req->name;
       $data->student_id=$req->student_id;
       $data->subject=$req->subject;
       if($req->mark_acquired==$req->highest_mark)
       {
         $data->mark_acquired=$req->mark_acquired."Highest";
       }
       elseif($req->mark_acquired<=32)
       {
         $data->mark_acquired=$req->mark_acquired."Failed";
         $data->save();
         echo "<h5>As the student has got less than 33 which means to be FAILED in the 
         examination</h5>";
       }
       else{
       $data->mark_acquired=$req->mark_acquired;
       }
       $data->highest_mark=$req->highest_mark;
       $data->save();
       return "<h4>Mark has been saved successfully</h4>";
    }


    public function getMark(){
      $data=Mark::all();
      return view('Mark',['marks'=>$data]);
    }


    public function deleteMark($id)
    {
       $data=Mark::find($id);
       $data->delete();
       return redirect()->back();
    }


    public function updateMark($id)
    {
       $data=Mark::find($id);
       return view('UpdateMark',['item'=>$data]);
    }


    public function editMark(Request $req)
    {
       $data=Mark::find($req->id);
       $data->id=$req->id;
       $data->name=$req->name;
       $data->student_id=$req->student_id;
       $data->subject=$req->subject;
       if($req->mark_acquired==$req->highest_mark)
       {
         $data->mark_acquired=$req->mark_acquired."Highest";
       }
       elseif($req->mark_acquired<=32)
       {
         $data->mark_acquired=$req->mark_acquired."Failed";
         $data->save();
         echo "<h5>As the student has got less than 33 which means to be FAILED in the 
         examination</h5>";
       }
       else{
       $data->mark_acquired=$req->mark_acquired;
       }
       $data->highest_mark=$req->highest_mark;
       $data->save();
       return "<h4>Mark has been UPDATED successfully</h4>";
    }


    public function markRelation()
    {
       $marks1=Student::with('getMark')->find(1)->getMark;
       $marks2=Student::with('getMark')->find(2)->getMark;
       $marks3=Student::with('getMark')->find(3)->getMark;
       $marks4=Student::with('getMark')->find(4)->getMark;

       return view('MarkSheet',compact('marks1','marks2','marks3','marks4'));
    }

    
    public function searchMark(Request $req)
    {
      $search=$req['search'];
      
         $data=Mark::where('name','like','%'.$search.'%')
         ->orWhere('student_id','like','%'.$search.'%')
         ->orWhere('subject','like','%'.$search.'%')
         ->orderBy('student_id','asc')
         ->get();
          
         if($data)
         {
         return view('SearchMarkInfo',['datas'=>$data]);
         }
    }



    public function total(){

        $data=Mark::selectRaw('name,student_id,sum(mark_acquired)')
        ->groupBy('name','student_id')
         ->orderBy('student_id','asc')
         ->get();
        return view('TotalMark',['total'=>$data]);
    }


   //public function table(Request $req){

       //// getting query result from Mark table
      //$data=Mark::selectRaw('name,student_id,sum(mark_acquired)')
      //->groupBy('name','student_id')
      //->orderBy('student_id','asc')
     // ->get();
    // here we are storing it to Total table
    //$table=new Total;
    //foreach($data as $data1)
    //$table->student_id=$data1->student_id;
    //$table->name=$data1->name;
    //$table->save();
    //return Total::all();     
  //}



   public function saveTotal(Request $req)
    {
       $data=new Total;
       $data->student_id=$req->student_id;
       $data->name=$req->name;
       $data->total=$req->total;
       $data->merit=$req->merit;
       $data->save();
       return "<h4>Total mark has been saved successfully</h4>";
    }


    public function getTotal(){
      $data=Total::all();
      return view('Total',['totals'=>$data]);
    }


    public function deleteTotal($id)
    {
       $data=Total::find($id);
       $data->delete();
       return redirect()->back();
    }


    public function updateTotal($id)
    {
       $data=Total::find($id);
       return view('UpdateTotal',['total'=>$data]);
    }


    public function editTotal(Request $req)
    {
       $data=Total::find($req->id);
       $data->id=$req->id;
       $data->student_id=$req->student_id;
       $data->name=$req->name;
       $data->total=$req->total;
       $data->merit=$req->merit;
       $data->save();
       return "<h4>Total Mark has been UPDATED successfully</h4>";
    }


    public function join(){
      $data=DB::table('students')
      ->join('totals','students.id','=','totals.student_id')
      ->select('students.name','students.phone','students.email','students.image'
      ,'totals.student_id','totals.total','totals.merit')
      ->get();
       return view('FinalResult',['results'=>$data]);
    }

    //public function searchJoin(Request $req){
    //search=$req->search;
     //$data=DB::table('students');
     //if($search!=" ")
   //{
   //$data=$data->where('students.name',$search);   
    //}
   //$data=$data->select('totals.*','students.*')
      //->join('totals','students.id','=','totals.student_id')
        //->get();
   
   //return view("SearchJoin",['datas'=>$data]);
  //}

}
