<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SantriModel;
use PDF;

class SantriController extends Controller
{
    public function tampilsantri()
    {
        $santri = SantriModel::select('*')
            ->get();

        return view('tampilsantri', ['santri' => $santri]);
    }

    public function tambahsantri()
    {
        return view('tambahsantri');
    }

    public function simpansantri(Request $request)
    {
        $santri = SantriModel::create([
            'nm_santri' => $request->nm_santri,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('tampilsantri');
    }

    public function ubahsantri($id_santri)
    {
        $santri = SantriModel::select('*')
            ->where('id_santri', $id_santri)
            ->get();

        return view('ubahsantri', ['santri' => $santri]);
    }

    public function updatesantri(Request $request)
    {
        $santri = SantriModel::where('id_santri', $request->id_santri)
            ->update([
                'nm_santri' => $request->nm_santri,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'no_hp' => $request->no_hp,
            ]);

        return redirect()->route('tampilsantri');
    }

    public function hapussantri($id_santri)
    {
        $santri = SantriModel::where('id_santri', $id_santri)
            ->delete();

        return redirect()->route('tampilsantri');
    }

    public function cetaksantri()
    {
        $santri = SantriModel::select('*')
            ->get();

        $pdf = PDF::loadView('cetaksantri', ['santri' => $santri]);
        return $pdf->stream('Laporan-Data-Santri.pdf');
    }
}
