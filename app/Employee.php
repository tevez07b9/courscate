<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Employee extends Model
{
    protected $guarded = ["created_at", "updated_at", "emp_id"];

    public static function insertData($data){

        $value=DB::table('employees')->where('emp_email', $data['emp_email'])->get();
        if($value->count() == 0){
            Employee::create([
                "emp_name" => $data["emp_name"],
                "emp_email" => $data["emp_email"],
                "emp_address" => $data["emp_address"],
                "emp_mobile" => $data["emp_mobile"],
            ]);
        }
    }
}
