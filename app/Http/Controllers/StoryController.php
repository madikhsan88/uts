<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        $file = base_path('storage/app/public/data.json');
        $artikel = json_decode(file_get_contents($file));
        // dd($artikel);
        return view('story', compact(['artikel']));
    }
    public function buatstory()
    {
        return view('buatstory');
    }
    public function store(Request $request)
    {
        $file = base_path('storage/app/public/data.json');
        $artikel = file_get_contents($file);
        $data = json_decode($artikel, true);
        $data[] = array(
            'no' => str_random(10),
            'judul' => $request->input('judul'),
            'author' => $request->input('author'),
            'keterangan' => $request->input('keterangan'),
            'datetime'=> date('Y-m-d H:i:s'),
        );

        $jsonFile = json_encode($data, JSON_PRETTY_PRINT);
        $artikel = file_put_contents($file, $jsonFile);
        return redirect()->route('story');
   
    }
    public function edit($no)
    {
        $file = base_path('storage/app/public/data.json');
        $artikel = json_decode(file_get_contents($file), true);

        $data = $artikel[$no];

        return view('edit', compact(['data', 'no']));
    }
    public function hapus($no)
    {
        $file = base_path('storage/app/public/data.json');
        $getJson = file_get_contents($file);
        $artikel = json_decode($getJson, true);

        array_splice($artikel, $no, 1);

        $jsonFile = json_encode($artikel, JSON_PRETTY_PRINT);
        $getJson = file_put_contents($file, $jsonFile);

        return redirect()->route('story')->with(['artikel' => $artikel]);
    }
    public function update(Request $request, $no)
    {
        $file = base_path('storage/app/public/data.json');
        $getJson = file_get_contents($file);
        $artikelByNo = json_decode($getJson, true);

        $artikelByNo[$no]['judul'] = $request->input('judul');
        $artikelByNo[$no]['author'] = $request->input('author');
        $artikelByNo[$no]['keterangan'] = $request->input('keterangan');
        $artikelByNo[$no]['datetime'] = date('Y-m-d H:i:s');

        $jsonFile = json_encode($artikelByNo, JSON_PRETTY_PRINT);

        $getJson = file_put_contents($file, $jsonFile);

        $artikel = json_decode(file_get_contents($file));

        return redirect()->route('story')->with(['artikel' => $artikel]);
    }
    public function show($no)
    {
        $file = base_path('storage/app/public/data.json');
        $artikel = json_decode(file_get_contents($file), true);

        $data = $artikel[$no];
        return view('selengkapnya', compact(['data', 'no']));
    }
}
