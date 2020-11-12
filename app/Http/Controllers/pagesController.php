<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class pagesController extends Controller
{

    public function index(){
        $posts = file_get_contents(base_path('storage/app/public/data.json'));
        $posts = json_decode($posts);
        // $posts = \App\posts::hydrate($posts);
        //dd($posts);
        return view('home', ['posts' => $posts]);
    }

    public function post(){
        $posts = file_get_contents(base_path('storage/app/public/data.json'));
        $posts = json_decode($posts);
        $id = $_GET['id'];
        $posts= $posts[$id];
        // dd($posts);
        return view('post',['posts' => $posts]);
    }

    public function tambah(){
        $posts = file_get_contents(base_path('storage/app/public/data.json'));
        $posts = json_decode($posts);
        // array_push();
        return view('tambah');
    }
    public function create(Request $request){
        // $data = Storage::get("public/data.json");
        $data = Storage::get("public/data.json");
        $json = json_decode($data);
        $newid = count($json);
        
        $json [] = array(
            'id'=> $newid,
            'title' => $request->title,
            'datetime' => date('Y-m-d H:i:s'),
            'author' => $request->author,
            'content' => $request->content,
        );
        
        $jsonfile = json_encode ($json,JSON_PRETTY_PRINT);
        // dd($jsonfile);
        $data = Storage::put("public/data.json", $jsonfile);

        
        // array_push();
        return redirect()->route('index');
    }

    public function delete(){
        // $data = Storage::get("public/data.json");
        $data = Storage::get("public/data.json");
        $json = json_decode($data);
        $id = $_GET['id'];
        \array_splice($json, $id, 1);
        
        for ($i=0; $i < count($json) ; $i++) { 
            $json[$i]->id=$i;
        }
        // dd($json);
        
        $jsonfile = json_encode ($json,JSON_PRETTY_PRINT);
        
        $data = Storage::put("public/data.json", $jsonfile);

        
        // array_push();
        return redirect('/');
    }

    public function update(Request $request){
        // $data = Storage::get("public/data.json");
        $data = Storage::get("public/data.json");
        $json = json_decode($data);
        $id = $_GET['id'];
        $oldjson = $json;
        
        $json [$id] = array(
            'id'=> $id,
            'title' => $request->title,
            'datetime' => date('Y-m-d H:i:s'),
            'author' => $request->author,
            'content' => $request->content,
        );
        $jsonfile = json_encode ($json,JSON_PRETTY_PRINT);
        // dd($jsonfile);
        $data = Storage::put("public/data.json", $jsonfile);

        
        // array_push();
        return redirect('/');
    }

    public function halamanupdate(Request $request){
        $posts = Storage::get("public/data.json");
        $posts = json_decode($posts);
        $id = $_GET['id'];
        $posts= $posts[$id];
        // dd($posts);
        return view('update',['posts' => $posts]);
    }
    
}
