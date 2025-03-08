<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class gameController extends Controller
{
    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'name' => 'required|min:5',
            'gameplay' =>'required',
            'developer' =>'required',
            'year' =>'required',
        ],
        [
            'required' => 'inputan :attribute wajib di isi',
            'min' => 'inputan :attribute minimal :min karakter',
        ]);


        //insert data ke database
        DB::table('game')->insert([
            'name' => $request->input('name'),
            'gameplay' => $request->input('gameplay'),
            'developer' => $request->input('developer'),
            'year' => $request->input('year'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]); 

        //redirect
        return redirect('/game');
    }

    public function index()
    {
        $game = DB::table('game')->get(); //select * from game;

        //dd($game);
 
        return view('game.index', ['game' => $game]);
    }

    public function show($id)
    {
        $game = DB::table('game')->find($id);

        //dd($game);

        return view('game.details', ['game' => $game]);


    }

    public function edit($id)
    {
        $game = DB::table('game')->find($id);

        //dd($genres);

        return view('game.Edits', ['game' => $game]);


    }

    public function update(Request $request, $id)
    {
       //validasi
       $request->validate([
        'name' => 'required|min:5',
        'gameplay' =>'required',
        'developer' =>'required',
        'year' =>'required',
    ],
    [
        'required' => 'inputan :attribute wajib di isi',
        'min' => 'inputan :attribute minimal :min karakter',
    ]);

         //update data ke database
         DB::table('game')
         ->where('id', $id)
         ->update(
             [
                 'name' => $request->input('name'),
                 'gameplay' => $request->input('gameplay'),
                 'developer' => $request->input('developer'),
                 'year' => $request->input('year'),
             ]
         
         );

        return redirect('/game');
    }

    public function destroy($id)
    {
        DB::table('game')->where('id', $id)->delete();
        
        return redirect('/game');
    }
}
// Code disini







