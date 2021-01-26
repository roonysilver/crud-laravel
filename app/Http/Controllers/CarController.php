<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Color;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Car::all();

        return view('cars.index', array("car" => $car));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $color = Color::all();
        // dd($color);
        return view('cars.create')->with(['color' => $color]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'make' => 'required',
            'model' => 'required'
        ]);
        $car = new Car;
        $car->make = $request->make;
        $car->model = $request->model;
        $car->produced_on = $request->produced_on;
        $car->colors_id = $request->color;
        // dd($car);
        $car->save();
        return redirect("/cars")->with("success" , "New Car has been created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', array('car' => $car));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = Color::all();
        $car = Car::find($id);
        return view('cars.edit', array('car' => $car))->with(['color' => $color]);
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
        $request->validate([
            'make' => 'required',
            'model' => 'required'
        ]);
            
            $car = Car::find($id);
            $car->model = $request->get('model');
            $car->make = $request->get('make');
            $car->produced_on = $request->get('produced_on');
            $car->colors_id = $request->color;
        
        $car->save();
        return redirect("/cars")->with("success" , "New Car has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect("/cars")->with("success" , "New Car has been Deleted!");
    }
}
