<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return ['name'=>'pim'];
        $categories = \App\Category::all();
        return [
            'success' => true,
            'data' => $categories
        ];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $singer = new \App\Author;
        $singer->name = trim($request->name);
        if (!empty($singer->name) && $singer->save()){
            return [
                'success' => true,
                'data' => "Singer '{$singer->name}' was saved with id: {$singer->id}",
                'id' => $singer->id
            ];
        } else {
            return [
                'success' => false,
                'data' => "Some error occurred"
            ];
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = \App\Category::find($id);
        if (!is_null($category))
            return [
                'success' => true,
                'data' => $category->titles()->first()
            ];
        return [
            'success' => false,
            'data' => 'Book not found'
        ];
    }

    public function albums($id)
    {
        $category = \App\Category::find($id);
        if (!is_null($category)) {
            return [
                'success' => true,
                'data' => [
                    'count' => $category->titles()->count(),
                    'titles' => $category->titles()->get()
                ]
            ];
        } else {
            return [
                'success' => false,
                'data' => 'Book not found'
            ];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
