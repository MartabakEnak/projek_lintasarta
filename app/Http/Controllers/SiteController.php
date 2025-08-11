<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $sites = Site::all();
        return view('sites.index', compact('sites'));
    }

    public function create()
    {
        return view('sites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no' => 'required',
            'nama_site' => 'required',
            'core' => 'required',
            'status_penggunaan' => 'required|in:active,inactive',
            'status_core' => 'required|in:OK,NOK',
            'otdr_m' => 'nullable|integer',
            'source_site' => 'nullable',
            'destination_site' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        Site::create($request->all());
        return redirect()->route('sites.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(Site $site)
    {
        return view('sites.edit', compact('site'));
    }

    public function update(Request $request, Site $site)
    {
        $request->validate([
            'no' => 'required',
            'nama_site' => 'required',
            'core' => 'required',
            'status_penggunaan' => 'required|in:active,inactive',
            'status_core' => 'required|in:OK,NOK',
            'otdr_m' => 'nullable|integer',
            'source_site' => 'nullable',
            'destination_site' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        $site->update($request->all());
        return redirect()->route('sites.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy(Site $site)
    {
        $site->delete();
        return redirect()->route('sites.index')->with('success', 'Data berhasil dihapus.');
    }
}
