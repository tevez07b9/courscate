<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view("admin/employees", ["employees" => $employees]);        
    }

    public function add_csv()
    {
        return view("admin/add_employee_csv");
    }

    public function store_csv(Request $request)
    {
        $validatedData = $request->validate([
            'csv_data' => 'required',
        ]);
        if(!$request->file('csv_data') || $request->file('csv_data') == "") {
            $request->session()->flash('status','No CSV File UPloaded!');
            return redirect(url("admin/add_employee_csv"));
        }
        if ($request->input('submit') != null ){

            $file = $request->file('csv_data');
      
            // File Details 
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();
      
            // Valid File Extensions
            $valid_extension = array("csv");
      
            // 2MB in Bytes
            $maxFileSize = 2097152; 
      
            // Check file extension
            if(in_array(strtolower($extension),$valid_extension)){
      
              // Check file size
              if($fileSize <= $maxFileSize){
      
                // File upload location
                $location = 'uploads';
      
                // Upload file
                $file->move($location,$filename);
      
                // Import CSV to Database
                $filepath = public_path($location."/".$filename);
      
                // Reading file
                $file = fopen($filepath,"r");
      
                $importData_arr = array();
                $i = 0;
      
                while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                   $num = count($filedata );
                   
                   //Skip first row 
                   if($i == 0){
                      $i++;
                      continue; 
                   }
                   for ($c=0; $c < $num; $c++) {
                      $importData_arr[$i][] = $filedata [$c];
                   }
                   $i++;
                }
                fclose($file);
      
                // Insert to MySQL database
                foreach($importData_arr as $importData){
      
                    $insertData = array(
                        "emp_name"=>$importData[0],
                        "emp_email"=>$importData[1],
                        "emp_mobile"=>$importData[2],
                        "emp_address"=>$importData[3]);
                    Employee::insertData($insertData);
      
                }
      
                $request->session()->flash('status','Import Successful.');
                return redirect(url("admin/add_employee_csv"));
              }else{
                $request->session()->flash('status','File too large. File must be less than 2MB.');
                return redirect(url("admin/add_employee_csv"));
              }
      
            }else{
                $request->session()->flash('status','Invalid File Extension.');
                return redirect(url("admin/add_employee_csv"));
            }
        } else {
            $request->session()->flash('status','No input');
            return redirect(url("admin/add_employee_csv"));
            
        }
    }
    
    public function add()
    {
        return view("admin/add_employee");
    }

    

    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'name' => 'required',
            'emp_email' => 'required|unique:employees',
            'address' => 'required',
            'phone' => 'required',
            
        ]);

        $post_data = $request->all();

        $employee =  Employee::create([
            "emp_name" => $post_data["name"],
            "emp_email" => $post_data["emp_email"],
            "emp_address" => $post_data["address"],
            "emp_mobile" => $post_data["phone"],
        ]);
        $request->session()->flash('status', 'Employee created successfully!');
    	return redirect(url("admin/add_employee"));
    }

    
}
