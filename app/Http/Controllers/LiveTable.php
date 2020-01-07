<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Group;


class LiveTable extends Controller
{
    function index()
    {
        return view('live_table');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
            $data = DB::table('groups')->join('students', 'students.id_group', '=' , 'groups.id_groups')->join('lesson', 'lesson.id_lesson', '=' , 'students.id_Student')->where('id_groups','=',1)->get();
            echo json_encode($data);
        }
    }


    function add_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                'id_groups'     =>  $request->id_groups,
                'kierunek'      =>  $request->kierunek,
                'semestr'       =>  $request->semestr,
                'gr_dziekanska' =>  $request->gr_dziekanska,
                'name'          =>  $request->name,
                'surname'       =>  $request->surname,
                'nr_cwiczenia'  =>  $request->nr_cwiczenia,
                'ocena1'        =>  $request->ocena1,
                'ocena2'        =>  $request->ocena2,
                'ocena3'        =>  $request->ocena3,
            );
            $id_Student = DB::table('groups')->join('students', 'students.id_group', '=' , 'groups.id_groups')->join('lesson', 'lesson.id_lesson', '=' , 'students.id_Student')->insert($data);
            if($id_Student > 0)
            {
                echo '<div class="alert alert-success">Data Inserted</div>';
            }
        } 
    }

    function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name       =>  $request->column_value
            );
            DB::table('groups')->join('students', 'students.id_group', '=' , 'groups.id_groups')->join('lesson', 'lesson.id_lesson', '=' , 'students.id_Student')
                ->where('id_Student', $request->id_Student)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
            DB::table('groups')->join('students', 'students.id_group', '=' , 'groups.id_groups')->join('lesson', 'lesson.id_lesson', '=' , 'students.id_Student')
                ->where('id_Student', $request->id_Student)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }
    
}
?>