<?php

namespace App\Http\Controllers;

use App\Models\Variables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class VariablesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Variables::all()->setHidden([
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
        $messages = [
            'name.required' => 'فیلد نام متغیر خالی می باشد',
            'key.required' => 'فیلد کلید متغیر خالی می باشد',
            'body.required' => 'فیلد دیتا متغیر خالی می باشد',
            'information.required' => 'فیلد تعریف متغیر خالی می باشد',
        ];

        $request->validate([
            'name' => 'required',
            'key' => 'required',
            'body' => 'required',
            'information' => 'required',
        ], $messages);

        $result = Variables::create($request->all());

        return Response::json(
            [
                'message' => $result ? 'عملیات با موفقیت انجام شد' : 'عملیات انجام نشد'
            ],
        $result ? 201 : 400
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Response::json([
            'row' => Variables::find($id)
        ], 200);
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
        $messages = [
            'name.required' => 'فیلد نام متغیر خالی می باشد',
            'key.required' => 'فیلد کلید متغیر خالی می باشد',
            'body.required' => 'فیلد دیتا متغیر خالی می باشد',
            'information.required' => 'فیلد تعریف متغیر خالی می باشد',
        ];

        $request->validate([
            'name' => 'required',
            'key' => 'required',
            'body' => 'required',
            'information' => 'required',
        ], $messages);

        $result = Variables::where('id', $id)->update($request->all());

        return Response::json(
            [
                'message' => $result ? 'عملیات با موفقیت انجام شد' : 'عملیات انجام نشد'
            ],
        $result ? 200 : 400
        );

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ids = explode(',',$id);
        $result = Variables::destroy($ids);

        return Response::json([
            'message' => $result ? 'عملیات با موفقیت انجام شد' : 'عملیات انجام نشد'
        ], $result ? 200 : 400);
    }
}
