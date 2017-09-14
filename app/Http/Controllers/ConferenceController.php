<?php

namespace App\Http\Controllers;

use App\Conference;
use App\Speaker;
use DB;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferences = Conference::all();
        return view('conferences.index', compact('conferences'));
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
        $conference = Conference::find($id);
        return view ('conferences.show', compact('conference'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conference = Conference::find($id);
        $speakers = Speaker::all();
        $conference_speaker = $conference->speakers()->pluck('id', 'id')->toArray();
        return view ('conferences.edit', compact('conference', 'speakers', 'conference_speaker'));
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
        $conference = Conference::find($id);

        $this->validate($request, [
            'title' => 'required',
            'place' => 'required',
            'time' => 'required'
        ]);

        $conference->title = $request->title;
        $conference->place = $request->place;
        $conference->time = $request->time;
        $conference->save();

        if($request->speakers){
            DB::table('conference_speaker')->where('conference_id', $id)->delete();
            foreach ($request->speakers as $key=>$value) {
                $conference->speakers()->attach($value);
            }
        }

        return redirect()->route('conferences.index')->with('message', 'Конференция изменена!');
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
}
