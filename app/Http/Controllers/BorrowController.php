<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Promotion;

class BorrowController extends Controller
{

    public function manageVue()
    {
        return view('manage-vue');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $promotion = Promotion::latest()->paginate(5);

        $response = [
            'pagination' => [
                'total' => $promotion->total(),
                'per_page' => $promotion->perPage(),
                'current_page' => $promotion->currentPage(),
                'last_page' => $promotion->lastPage(),
                'from' => $promotion->firstItem(),
                'to' => $promotion->lastItem()
            ],
            'data' => $promotion
        ];

        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'expired_date' => 'required'
        ]);

        $create = Promotion::create($request->all());

        return response()->json($create);
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'expired_date' => 'required'
        ]);

        $edit = Promotion::find($id)->update($request->all());

        return response()->json($edit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Promotion::find($id)->delete();
        return response()->json(['done']);
    }
}
