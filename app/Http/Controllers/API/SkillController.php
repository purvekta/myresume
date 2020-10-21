<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Http\Resources\SkillResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\PassportAuthController;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $skills=auth()->user()->skills;
   
        return response(['skill'=>SkillResource::collection($skills),'message'=>'retrived'],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $skillData = $request->validate([
            'name' => 'required',
            'rating' => 'required',
                    ]);

        // $formData = $request->except('_token');

        $skillData =auth()->user()->skills()->create($skillData);
return response(['skills'=> new SkillResource($skillData),'message'=>'created'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $skillData = $request->validate([
            'name' => 'required',
            'rating' => 'required',
                    ]);

        // $formData = $request->except('_token');

       // auth()->user()->skills()->update($skillData);
       $skill->update($request->all());
       return response([ 'skill' => new SkillResource($skill), 'message' => 'Retrieved successfully'], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        // 
        $skill->delete();
        return response(['message'=>'deleted'],200);
    }
}
