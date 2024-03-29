<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $attendance = Absensi::all();

    // return
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
    Absensi::create([
      'id_user' => Auth::id(),
      'waktu_masuk' => null,
      'waktu_keluar' => null,
      'kode_absen' => strtoupper(Str::random(6)),
      'status' => 0,
    ]);

    return redirect()->route('dashboard');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Absensi  $absensi
   * @return \Illuminate\Http\Response
   */
  public function show(Absensi $absensi)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Absensi  $absensi
   * @return \Illuminate\Http\Response
   */
  public function edit(Absensi $absensi)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Absensi  $absensi
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Absensi $absensi)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Absensi  $absensi
   * @return \Illuminate\Http\Response
   */
  public function destroy(Absensi $absensi)
  {
    //
  }
}
