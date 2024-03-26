<?php

namespace App\Http\Controllers;

use App\Models\Earning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class EarningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Earning::all()->setHidden([
            'created_at',
            'updated_at'
        ]);

        return Response::json(
            $data,
            200
        );

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
        $result = Earning::create($request->all());
        
        if($result){
            return Response::json([
                'message' => 'عملیات با موفقیت انجام شد'
            ], 201);
        }


        return Response::json([
            'message' => 'عملیات انجام نشد'
        ], 400);
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ids = explode(',',$id);
        $result = Earning::destroy($ids);

        return Response::json([
            'message' => $result ? 'عملیات با موفقیت انجام شد' : 'عملیات انجام نشد'
        ], $result ? 200 : 400);
    }
}
