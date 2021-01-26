<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

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

    public function valid(Request $request) {
        $request->validate([
            'name' => 'required|min:6'
        ]);
    }

    public function basic_email() {
        $input = $request->all();
        $data = array('name'=>$input['name'], 'email'=>$input['email']);
     
        Mail::send('email', $data, function($message) {
           $message->to('lq_don@brycen.com.vn', 'Le Quy Don')->subject('Laravel Basic Testing Mail');
           $message->from('tc_son@brycen.com.vn','Tran Cong Son');
        });
        echo "Basic Email Sent. Check your inbox.";
     }
}
