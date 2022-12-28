<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function create()
    {
        return view("train.create");
    }

    public function store(Request $request)
    {

        $train = new Train; 

        $train->name = $request->get('name');

        $train->number = $request->get('number');

        $train->route = $request->get("route");

        $train->time = $request->get("time");




      
        $train->save();
     
        return redirect('train/create');
        // --------------------------------------
    }

    public function read()
    {
        $trains = train::all(); 
        return view('train/read')
            ->with(['trains' => $trains]);
    }

    public function edit($id)
    {

        $trains = train::find($id);

        return view('train/update')
            ->with(['trains' => $trains]);
    }

    public function update(Request $request, $id)
    {

        $train = train::find($id);
     
        $train->name = $request->get('name');

        $train->number = $request->get('number');

        $train->route = $request->get("route");

        $train->time = $request->get("time");


        $train->save(); 
        return redirect('train/read')
            ->with('status', 'id ' . $id . ' updated Successfully!');
    }
    public function delete($id)
    {
        // Delete the row pointed to by this id
        train::destroy($id);
        // --------------------------------------
        // Help on the following code is given at the following URL
        // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
        //
        return redirect('train/read')
            ->with('status', 'id ' . $id . ' deleted Successfully!');
        // --------------------------------------s
    }
}
