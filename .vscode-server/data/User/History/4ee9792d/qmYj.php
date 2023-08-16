<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Submission;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $submissions = Submission::latest()->get();
        $cardvalue = [
          'pending' => Submission::where('status_id', Status::PENDING['id'])->count(),
          'total' => Submission::count(),
        ];

        return view('home', [
          'records' => $submissions,
          'cardvalue' => $cardvalue
        ]);
    }

}
