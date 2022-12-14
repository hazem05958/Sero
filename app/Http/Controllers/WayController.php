<?php

namespace App\Http\Controllers;

use App\Models\Way;
use Illuminate\Http\Request;

class WayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ways=Way::orderBy("id",'desc')->paginate(5);
        return response()->view("cms.Way.index",compact('ways'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('cms.way.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(),[
            'name_way' => 'required|string|min:3|max:20',
        ]
    );

        if(!$validator->fails()){

            $ways = new way();

            $ways->name_way = $request->get('name_way');

            $isSaved = $ways->save();

            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => 'تم إضافة الطريق بنجاح'] , 200);

            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'فشلت إضافة الطريق'] , 400);
            }
        }
            else{
                return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ways=way::findOrFail($id);
        return response()->view("cms.Way.edit" ,compact('ways'));
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
        $validator = Validator($request->all(),[
            'name_way' => 'required|string|min:3|max:20',
        ]
    );

        if(!$validator->fails()){

            $ways=way::findOrFail($id);

            $ways->name_way = $request->get('name_way');

            $isSaved = $ways->save();
            return ['redirect'=>route('ways.index')];

            if($isSaved){
                return response()->json(['icon' => 'success' , 'title' => 'تم تعديل الطريق بنجاح'] , 200);

            }
            else{
                return response()->json(['icon' => 'error' , 'title' => 'فشلت تعديل الطريق'] , 400);
            }
        }
            else{
                return response()->json(['icon' => 'error' , 'title' => $validator->getMessageBag()->first()] , 400);
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        way::destroy($id);
    }
}
