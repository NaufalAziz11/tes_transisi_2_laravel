<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Support\Facades\DB;
use App\File;
use Auth;

class EmployeeController extends Controller
{

    public function create(Request $request)
    {
        $employee = new employee;

        $employee->nama = $request["nama"];
        $employee->company = $request["company"];
        $employee->email = $request["email"];

        $employee->save();
        return redirect()->route('list-employee');
    }

    public function get_list_employee()
    {

        $employee = employee::simplePaginate(5);

        return view('file.list_employee', ['employee' => $employee]);
    }
    public function get_employee($id_file)
    {
        $employee = employee::where('id', $id_file)
            ->first();
        if ($employee == NULL) {
            return abort(404);
        }
        return view('file.detail_employee', ["employee" => $employee]);
    }
    public function update(Request $request)
    {
        $employee = employee::find($request["id"]);

        $employee->nama = $request["nama"];
        $employee->company = $request["company"];
        $employee->email = $request["email"];
        $employee->save();

        return redirect()->route('list-employee');
    }
    public function delete($id)
    {
        $employee = employee::find($id);
        $employee->delete();

        return $this->get();
    }
}
