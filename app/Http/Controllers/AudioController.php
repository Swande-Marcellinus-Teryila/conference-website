<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio;
use Illuminate\Support\Facades\Storage;

class AudioController extends Controller
{
    
    public function index()
    {
        $audios = Audio::all();
        return view('admin.audios', ['audios' => $audios]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'string|required',
            'audio_link' => 'mimes:mp3,wav|required'
            
        ]);
        $Audio = Audio::create([
            'title' => $request->title,
             
            'audio_link' => $request->file('audio_link')->storeAs('audios',$request->title)
        ]);
        return redirect()->back()->with('status', 'Audio added successfully');
    }


    public function update(Request $request ,$id)
    {/* 
        $updateAudio = Audio::find($id);
        $updateAudio-> */
        return redirect()->back()->with('status', 'Audio updated successfully');
    }


    public function destroy($id)
    {
        $delAudio = Audio::find($id);
        if(Storage::exists($delAudio->audio_link)){
            Storage::delete($delAudio->audio_link);
        }
        $delAudio->delete();
        return redirect()->back()->with('status', 'Audio deleted successfully');
    }
}
