<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

// use Library;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

// user everything
// use Gate;
use Auth;

// model here
use App\Models\User;
use App\Models\Operational\Appointment;
use App\Models\Operational\Transaction;
use App\Models\Operational\Doctor;
use App\Models\MasterData\Specialist;
use App\Models\MasterData\Consultation;
use App\Models\MasterData\ConfigPayment;    

class HospitalPatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // for table grid
        $hospital_patient = user::whereHas('detail_user', function (Builder $query) {
            $query->where('type_user_id', 3); // only load user type patient or id 3 in type user table
        })
            ->orderBy('created_at', 'desc')
            ->get();
            
        return view('pages.backsite.operational.hospital-patient.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }
}
