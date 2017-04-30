<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Restaurant;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Restaurant::all();
        return json_encode($data);
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
        $newData = array(
                    'name' => $request->input('name')
                    ,'kind' => $request->input('kind')
                    ,'nearest_station' => $request->input('nearest_station')
                    ,'street_address' => $request->input('street_address')
                    ,'url' => $request->input('url')
                    ,'key_word' => $request->input('key_word')
                   );
        Restaurant::create($newData);
        return json_encode(array($newData));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Restaurant::find($id);
        return json_encode(array($data));
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
        $updateData = Restaurant::find($id);

        $updateDat->aname = $request->input('name')
        $updateDat->kind = $request->input('kind')
        $updateDat->nearest_station = $request->input('nearest_station')
        $updateDat->street_address = $request->input('street_address')
        $updateDat->url = $request->input('url')
        $updateDat->key_word = $request->input('key_word')

        $updateData->save();
        return json_encode(array($updateData));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Restaurant::destroy($id);
        return json_encode(array());
    }
}
