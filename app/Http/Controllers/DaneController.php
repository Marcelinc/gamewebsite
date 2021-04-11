<?php

namespace App\Http\Controllers;

use App\Http\Requests\DaneRequest;
use Illuminate\Http\Request;
use App\Dane;

class DaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('daneForm');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dane=Dane::where('user_id',\Auth::user()->id)->first();
        //return view('dane',compact('dane'));
        if($dane === NULL)
            $val='';
        else{
            $val='<h1>Twoje dane</h1><p>Nazwisko: '.$dane->nazwisko.'</p><p>Imie: '.$dane->imie.'</p><p>Telefon: '.$dane->telefon.'</p><p>Miejscowość: '.$dane->miejscowosc.'</p><p>Kod pocztowy: '.$dane->kodPocztowy.'</p>';
        }
        return $val;
    }

    public function createToForm()
    {
        $dane=Dane::where('user_id',\Auth::user()->id)->first();
        if($dane === NULL)
            $val='';
        else
            $val=''.$dane->nazwisko.','.$dane->imie.','.$dane->telefon.','.$dane->miejscowosc.','.$dane->kodPocztowy;
        return $val;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DaneRequest $request)
    {
        if(\Auth::user()==null)
            return view('index');
        $dane=new Dane();
        $dane->user_id = \Auth::user()->id;
        $dane->nazwisko = $request->naz;
        $dane->imie = $request->imie;
        $dane->telefon = $request->tel;
        $dane->miejscowosc = $request->adres;
        $dane->kodPocztowy = $request->poczta;
        if($dane->save())
        {
            return redirect()->route('home');
        }
        return "Błąd przy dodawaniu danych";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $dane=Dane::where('user_id',\Auth::user()->id)->first();
        return view('daneEdit',compact('dane'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DaneRequest $request)
    {
       // $dane=Dane::find($id);
        $dane=Dane::where('user_id',\Auth::user()->id)->first();
        $dane->nazwisko=$request->naz;
        $dane->imie=$request->imie;
        $dane->telefon=$request->tel;
        $dane->miejscowosc=$request->adres;
        $dane->kodPocztowy=$request->poczta;
        if($dane->save())
            return redirect()->route('home');
        return "Wystąpił błąd";
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
