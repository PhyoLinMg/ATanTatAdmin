<?php

namespace App\Http\Controllers;

use App\Period;
use App\Subject;
use App\Major;
use App\Repositories\Model\PeriodModel;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    protected $periods;
    public function __construct(PeriodModel $periods){
        $this->periods=$periods;
    }
    /**
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $periods=Period::paginate(5);
        return view('admin.period.index',compact('periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects=Subject::get();
        $majors=Major::get();
        return view('admin.period.create',compact('subjects','majors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->periods->save($request);
        return redirect('/periods');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function edit(Period $period)
    {
        $subjects=Subject::get();
        $majors=Major::get();
        return view('admin.period.edit',compact('period','subjects','majors'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Period $period)
    {
        $this->periods->update($period->id,$request);
        return redirect('/periods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy(Period $period)
    {
        //
    }
    
}
