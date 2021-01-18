<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudInsertController extends Controller
{
    public function insertForm() {
        return view('stud_create');
    }

    public function insert(Request $request) {
        $name = $request->input("stud_name");
        DB::insert('insert into student (name) values (?)', [$name]);
        echo "Record has been inserted!";
        echo '<a href = "/insert">Click here</a> to go back.';
    }

    public function index() {
        $user = DB::select('select * from student');
        return view('stud_view', ['users'=> $user]);
    }

    public function show($id) {
        $user = DB::select('SELECT * FROM student WHERE id = ?', [$id]);
        return view('stud_update',['users' => $user]);
    }

    public function update(Request $request, $id) {
        $name = $request->input('stud_name');
        DB::update('update student set name = ? where id = ?', [$name,$id]);
        echo "Record has been updated<br/>";
        echo '<a href = "/view">Click Here</a> to go back.';
    }

    public function delete($id) {
        DB::delete('delete from student where id = ?', [$id]);
        echo "Record deleted";
        echo '<a href = "/view">Click Here</a> to go back.';
    }
}
