<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\companies;
use Illuminate\Support\Facades\DB;
use App\File;
use Auth;

class CompaniesController extends Controller
{
    public function create(Request $request)
    {
        $companies = new companies;

        $companies->nama = $request["nama"];
        $companies->email = $request["email"];
        $companies->logo = $request["logo"];
        $companies->website = $request["website"];
        $companies->save();

        return redirect()->route('list-companies');
    }
    public function get_list_companies()
    {

        $companies = companies::all();

        return view('file.list_companies', ['companies' => $companies]);
    }

    public function get_companies($id_file)
    {
        $companies = companies::where('id', $id_file)
            ->first();
        if ($companies == NULL) {
            return abort(404);
        }
        return view('file.detail_companies', ["companies" => $companies]);
    }
    public function update(Request $request)
    {
        $companies = companies::find($request["id"]);

        $companies->nama = $request["nama"];
        $companies->email = $request["email"];
        $companies->logo = $request["logo"];
        $companies->website = $request["website"];
        $companies->save();

        return redirect()->route('list-companies');
    }
    public function delete($id_file)
    {
        $companies = companies::where('id', $id_file)
            ->delete();

        if ($companies == NULL) {
            return abort(404);
        }
        return view('file.list_companies', ["companies" => $companies]);
    }
}
