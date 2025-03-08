<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Genres;

class genresController extends Controller
{
    public function create()
    {
        return view('genres.tambah');
    }
    
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'name' => 'required|min:5',
            'description' =>'required',
        ],
        [
            'required' => 'inputan :attribute wajib di isi',
            'min' => 'inputan :attribute minimal :min karakter',
        ]);


        //insert data ke database
        DB::table('genres')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]); 

        //redirect
        return redirect('/genres');
    }

    public function index()
    {
        $genres = DB::table('genres')->get(); //select * from genres;

        //dd($genres);
 
        return view('genres.tampil', ['genres' => $genres]);
    }

    public function show($id)
    {
        $genres = Genres::find($id);

        //dd($genres);

        return view('genres.detail', ['genres' => $genres]);


    }

    public function edit($id)
    {
        $genres = DB::table('genres')->find($id);

        //dd($genres);

        return view('genres.edit', ['genres' => $genres]);


    }


    public function update(Request $request, $id)
    {
        //validasi
        $request->validate([
            'name' => 'required|min:5',
            'description' =>'required',
        ],
        [
            'required' => 'inputan :attribute wajib di isi',
            'min' => 'inputan :attribute minimal :min karakter',
        ]);


        //update data ke database
        DB::table('genres')
            ->where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                ]
            
            );

        //redirect
        return redirect('/genres');
    }

    public function destroy($id)
    {
        DB::table('genres')->where('id', $id)->delete();
        
        return redirect('/genres');
    }
}
