<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Train;

class ReservationController extends Controller
{
    public function create() {
        $trains = Train::all(); // Load all reservations. To add in the dropdown
        return view ("reservation/create")
        ->with(['trains' => $trains]);
        }

        public function store(Request $request)
    {

        $reservation = new Reservation; // Must import the Model file: use App\reservation;
        
        $reservation->name = $request->get('name');

        $reservation->email = $request->get('email');

        $reservation->phone = $request->get('phone');

        $reservation->total_seats = $request->get("total_seats");

        $reservation->train_id = $request->get('train');
        // Since the marital_status field has a default value of ZERO,
        // therefore, even if no text is copied from the text box
        // the value ZERO would be stored.
        //$reservation->marital_status = $request->get('marital_status'); 
        $reservation->save(); /* Store data inside the table */

        // --------------------------------------
        // Help on the following code is given at the following URL
        // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
        //
        return redirect('user/view')
            ->with('status', 'id ' . $reservation->id . ' added Successfully!');
        // --------------------------------------
    }

    public function read()
    {
        $reservations = Reservation::all(); // Load reservations using the model ‘reservation'

        // Pass the $reservations to the view, 'reservation/read'
        return view('reservation/read')
            ->with(['reservations' => $reservations]);
    }

    public function edit($id)
    {

        $reservations = Reservation::find($id); // Load reservations using the model 'reservation'
        $trains = Train::all();
        // Pass the $reservations to the view, 'reservation/update'
        // so that user can update.
        return view('reservation/update')
            ->with(['reservations' => $reservations])->with(['trains' => $trains]);
    }

    public function update(Request $request, $id)
    {

        // Locate the row of this id so that updated record
        // can be overwritten ONLY on the previous record of this id.
        $reservation = Reservation::find($id);
        // you can add the chech here whether this reservation exists or not?
         // Copy from textbox and paste on the handler
        $reservation->name = $request->get('name');
        $reservation->email = $request->get('email');
        $reservation->phone = $request->get('phone');
        $reservation->total_seats = $request->get("total_seats");
        $reservation->train_id = $request->get('train');


        // Since the marital_status field has a default value of ZERO,
        // therefore, even if no text is copied from the text box
        // the value ZERO would be stored.
        //$reservation->marital_status = $request->get('marital_status'); 
        $reservation->save(); /* Overwrite data on the row pointed by id */

        // --------------------------------------
        // Help on the following code is given at the following URL
        // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
        //
        return redirect('reservation/read')
            ->with('status', 'id ' . $id . ' updated Successfully!');
        // --------------------------------------
    }
    public function delete($id)
    {
        // Delete the row pointed to by this id
        Reservation::destroy($id);
        // --------------------------------------
        // Help on the following code is given at the following URL
        // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data
        //
        return redirect('reservation/read')
            ->with('status', 'id ' . $id . ' deleted Successfully!');
        // --------------------------------------s
    }
}
