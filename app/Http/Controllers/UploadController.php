<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;
class UploadController extends Controller
{
    public function index(){
        $gallery = Gallery::all();
        return view('gallery',['gallery' => $gallery]);
    }
    public function upload(){
        return view('upload');
    }
    public function send(Request $request)
    {
        $gallery = new Gallery;
        if($request->hasFile('file') && $request->file('file')->isValid()){
            
            $requestFile = $request->file;
            $extension = $requestFile->extension();
            $fileName = md5($requestFile->getClientOriginalName() . strtotime('now')) . "." . $extension;
            $request->file->move(public_path('imagens/gallery/'),$fileName);
            $gallery->title = $request->title;
            $gallery->like = 0;
            $gallery->description = $request->description;
            $gallery->file = $fileName;
        }

        $gallery->save();
        return redirect('/');
    }
    public function destroy($id)
    {
        
        Gallery::findOrFail($id)->delete();
        return redirect('/');

    }
    public function like($id)
    {
        $like = DB::select('select `like` from gallery where id = ?', [$id]);
        $like = $like[0]->like + 1;
        Gallery::where('id', $id)->update(['like' => $like]);
        
        return redirect('/');
    }
}
