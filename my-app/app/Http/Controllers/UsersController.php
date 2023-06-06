<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class UsersController extends Controller
{

    // // Export
    // public function export(){

    //     // ダウンロードする場合
    //     // return Excel::download(new UsersExport, 'users.xlsx');

    //     // ファイルをサーバに保存する場合　storage/app
    //     return Excel::store(new UsersExport, 'users.xlsx');


    // }

    // Import
    public function index(){

    	return view('index');

    }

    public function store(Request $request){

		$file = $request->file('file');

		Excel::import(new UsersImport, $file);

    }

}
