<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\ProjectExport;
use Maatwebsite\Excel\Excel;

class ExportController extends Controller
{
    public function exportUser() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function exportProject() 
    {
        return Excel::download(new ProjectExport, 'projects.xlsx');
    }
}
