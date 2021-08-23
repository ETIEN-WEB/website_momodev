<?php

namespace App\Http\Controllers;

use App\Models\Job;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    //

    public function liste_job_favoris()
    {
        $data['sub_title'] = "litse job ";
        $data['jobs'] = Job::all();
        
        return view('ecommerce.liste_job_favoris',$data);
    }
}
