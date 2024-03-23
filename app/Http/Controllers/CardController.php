<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::all();
        return $cards;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required|string',
            'email' => 'required|string',
            'adress' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required|string',
            'number_card' => 'required|string',
            'expiration_month' => 'required|string',
            'expiration_year' => 'required|string',
            'security_code' => 'required|string',
        ]);


        $card = new Card();

        $card->name = $request->name;
        $card->lastname = $request->lastname;
        $card->email = $request->email;
        $card->adress = $request->adress;
        $card->city = $request->city;
        $card->phone = $request->phone;
        $card->number_card = $request->number_card;
        $card->expiration_month = $request->expiration_month;
        $card->expiration_year = $request->expiration_year;
        $card->security_code = $request->security_code;

        $card->save();

        return $card;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $card = Card::find($id);
        return $card;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required|string',
            'email' => 'required|string',
            'adress' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required|string',
            'number_card' => 'required|string',
            'expiration_month' => 'required|string',
            'expiration_year' => 'required|string',
            'security_code' => 'required|string',
        ]);

        $card = Card::find($id);

        $card->name = $request->name;
        $card->lastname = $request->lastname;
        $card->email = $request->email;
        $card->adress = $request->adress;
        $card->city = $request->city;
        $card->phone = $request->phone;
        $card->number_card = $request->number_card;
        $card->expiration_month = $request->expiration_month;
        $card->expiration_year = $request->expiration_year;
        $card->security_code = $request->security_code;

        $card->save();
        return $card;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $card = Card::destroy($id);
        return $card;
    }
}
