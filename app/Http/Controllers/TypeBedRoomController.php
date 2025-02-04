<?php

namespace App\Http\Controllers;

use App\Models\TypeBedRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeBedRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nom' =>'required',
            'parent_space_id'=>'required',
            'branch_id'=>'required'
        ]);
        if($validator->stopOnFirstFailure()->fails()){
            return response()->json([
                'message' => $validator->errors()
             ],402);
        }
        $field = $validator->validated();
        TypeBedRoom::updateOrCreate([
            'nom'               =>   $field['nom'],
            'parent_space_id'   =>   $field['parent_space_id'],
            'branch_id'         =>   $field['branch_id']
        ]);
        return response()->json([
            'message' => $this->msg_success,
         ],$this->status_ok);
    }

    /**
     * Display the specified resource.
     */
    public function show(TypeBedRoom $typeBedRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TypeBedRoom $typeBedRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TypeBedRoom $typeBedRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TypeBedRoom $typeBedRoom)
    {
        //
    }
}
