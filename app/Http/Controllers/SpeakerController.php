<?php

namespace App\Http\Controllers;

use App\Conference;
use App\Speaker;
use DB;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speaker::all();
        return view ('speakers.index', compact('speakers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conferences = Conference::all();
        return view ('speakers.create', compact('conferences'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $speaker = Speaker::create($request->except('_token'));

        if($request->conferences){
            foreach ($request->conferences as $key=>$value) {
                $speaker->conferences()->attach($value);
            }
        }

        return redirect()->route('speakers.index')->with('message', 'Спикер добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $speaker = Speaker::find($id);
        return view('speakers.show', compact('speaker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speaker = Speaker::find($id);
        $conferences = Conference::all();
        $conference_speaker = $speaker->conferences()->pluck('id', 'id')->toArray();
        return view('speakers.edit', compact('speaker', 'conferences', 'conference_speaker'));
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
        $speaker = Speaker::find($id);

        $this->validate($request, [
            'name' => 'required',
            'info' => 'required'
        ]);

        $speaker->name = $request->name;
        $speaker->info = $request->info;
        $speaker->save();

        if($request->conferences){
            DB::table('conference_speaker')->where('speaker_id', $id)->delete();
            foreach ($request->conferences as $key=>$value) {
                $speaker->conferences()->attach($value);
            }
        }

        return redirect()->route('speakers.index')->with('message', 'Спикер изменен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('speakers')->where('id', $id)->delete();
        return back()->with('message', 'Спикер удален!');
    }
}
