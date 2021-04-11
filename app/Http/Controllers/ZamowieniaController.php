<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Order;
use Illuminate\Http\Request;

class ZamowieniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('zamowienia');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$orders=Order::where('user_id',\Auth::user()->id)->get();
        $orders=Order::where('user_id','=',\Auth::user()->id)->get();
        return view('zamowienia',compact('orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        if(\Auth::user()==null)
            return redirect()->route('login');
        $order=new Order();
        $order->user_id = \Auth::user()->id;
        $order->nazwisko = $request->naz;
        $order->imie = $request->imie;
        $order->telefon = $request->tel;
        $order->miejscowosc = $request->adres;
        $order->kodPocztowy = $request->poczta;
        $order->produkty = $request->prod;
        if($order->save())
        {
            return redirect()->route('orderCreate');
        }
        return "Błąd przy składaniu zamówienia";
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
    public function update(OrderRequest $request, $id)
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
        $order=Order::find($id);
        if(\Auth::user()->id != $order->user_id)
        {
            return back()->with(['success' => false, 'message_type' => 'danger',
                'message' => 'Nie posiadasz uprawnień do przeprowadzenia tej operacji.']);     
        }
        if($order->delete())
        {     
            return redirect()->route('orderCreate')->with(['success' => true,'message_type' => 'success',
                'message' => 'Pomyślnie anulowano zamówienie']);   
        }   
        return back()->with(['success' => false, 'message_type' => 'danger',             
            'message' => 'Nie możesz anulować zamowienia']); 
    }
}
