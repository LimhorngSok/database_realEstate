<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property_detail;
use App\Property;

use auth;
class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agent.property.detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agent.property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
      // 'slug' => 'required',
      // 'picture' => 'required',
      ]);
        $property = new Property;
        $property_d = new Property_detail;
        // $property->owner_id = 2;
        // $property->agent_id = 3;
        // $property->type_id = 4;
        $property->save();
        if ($request->hasFile('picture')) {
            $picture_name = $request->picture->store('public');
            $thumbnail_name = $request->thumbnail->store('public');
          }else{
            return 'No image';
        }

        $property_d->price = $request->price;
        $property_d->price_rent = $request->price_rent;
        $property_d->availability = $request->availability;
        $property_d->address = $request->address;
        $property_d->description = $request->description;
        $property_d->thumbnail = $thumbnail_name;
        $property_d->picture = $picture_name;
        $property_d->property()->associate($property);
        $property_d->save();
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
