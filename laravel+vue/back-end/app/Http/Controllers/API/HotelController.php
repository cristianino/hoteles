<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
          $message = Hotel::all();
          $code = 200;
        } catch (\Exception $e) {
          $message = $e;
          $code = 500;
        }
        return response($message, $code);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
          $message = Hotel::find($id);
          $code = 200;
        } catch (\Exception $e) {
          $message = $e;
          $code = 500;
        }
        return response($message, $code);
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

    public function filter($filter, Request $request)
    {
      try {
        if (!$request['data']) {
          return response('Es necesario enviar los parametors en una variable con en nombre data', 500);
        }
        switch ($filter) { //nombre, precio, pais, ciudad, estrellas
          case 'nombre':
            $message = Hotel::where('name', $request['data'])->get();
            $code = 200;
            break;
          case 'precio':
            $message = Hotel::where('price', $request['data'])->get();
            $code = 200;
            break;
          case 'pais':
            $message = Hotel::where('country', $request['data'])->get();
            $code = 200;
          break;
          case 'ciudad':
            $message = Hotel::where('city', $request['data'])->get();
            $code = 200;
            break;
          case 'estrellas':
            $message = Hotel::where('stars', $request['data'])->get();
            $code = 200;
            break;
          default:
            $message = 'filtro '.$filter.' aún no es soportado';
            $code = 400;
            break;
        }
      } catch (\Exception $e) {
        $message = $e;
        $code = 500;
      }

      return response($message, $code);
    }
}
