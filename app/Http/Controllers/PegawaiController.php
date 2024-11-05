<?php

namespace App\Http\Controllers;

use App\Models\PegawaiModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Pegawai';
        $pegawai = PegawaiModel::all();
        return view('welcome', compact('title', 'pegawai'));
    }

    public function search(Request $request)
    {
        // Ambil parameter pencarian dari request
        $filters = [
            'nama_lengkap' => $request->input('nama_lengkap'),
            'departemen' => $request->input('departemen'),
            'jabatan' => $request->input('jabatan'),
            'status_kepegawaian' => $request->input('status_kepegawaian'),
            'tanggal_masuk' => $request->input('tanggal_masuk'),
        ];

        // Mengonversi format tanggal
        if ($filters['tanggal_masuk']) {
            // Mengubah format dari 'd/m/Y' menjadi 'Y-m-d'
            $filters['tanggal_masuk'] = Carbon::createFromFormat('d/m/Y', $filters['tanggal_masuk'])->format('Y-m-d');
        }

        // Temukan pegawai berdasarkan kolom yang diberikan
        $results = PegawaiModel::findByColumns($filters);

        // Kembalikan hasil pencarian dalam format JSON
        return response()->json([
            'data' => $results,
        ], 200);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->only([
            'nama_lengkap',
            'nik',
            'npwp',
            'jenis_kelamin',
            'tanggal_lahir',
            'alamat',
            'no_telepon',
            'email',
            'jabatan',
            'departemen',
            'tanggal_masuk',
            'gaji_pokok',
            'status_kepegawaian'
        ]);

        $pegawai = PegawaiModel::create($requestData);

        return response()->json([
            'success' => true,
            'message' => 'Pegawai successfully stored',
            'data' => $pegawai
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}