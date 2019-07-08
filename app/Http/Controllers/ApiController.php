<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Period;
use App\Subject;
use App\Major;
use App\Uni;

class ApiController extends Controller
{
    public function showperiods(){
        $data=[];
        $periods=Period::get();
        foreach($periods as $key=>$period){
            $data["data"][$key]=[
                'subject_id'=>$period->subject_id,
                'subject_name'=>Subject::find($period->subject_id)->name,
                'major_id'=>$period->major_id,
                'major_name'=>Major::find($period->major_id)->name,
                'start_time'=>$period->start_time,
                'end_time'=>$period->end_time
            ];
        }

        return response()->json($data);
    }
    public function getSubjects(){
    	$data=[];
    	$subjects=Subject::get();
    	foreach($subjects as $key=>$subject){
    		$data["data"][$key]=[
    			'id'=>$subject->id,
    			'name'=>$subject->name,
    			'yes'=>$subject->yes,
    			'no'=>$subject->no
    		];
    	}
    	return response()->json($data);
    }
    public function getMajors(){
        $data=[];
        $majors=Major::get();
        foreach($majors as $key=>$major){
            $data["data"][$key]=[
                'id'=>$major->id,
                'name'=>$major->name,
                'year'=>$major->year
            ];
        }
        return response()->json($data);
    }
    public function getUniversities(){
        $data=[];
        $unis=Uni::get();
        foreach($unis as $key=>$uni){
            $data["data"][$key]=[
                'id'=>$uni->id,
                'name'=>$uni->name
            ];
        }
        return response()->json($data);
    }
}
