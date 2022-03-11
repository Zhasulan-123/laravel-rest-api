<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;

use Validator;

class NewsController extends Controller
{
    
    public function newsGet(){

        return response()->json(News::get(), 200);

    }

    public function newsById($id){

        $news = News::find($id);

        if(is_null($news)){

            return response()->json(['error' => true, 'message' => 'Not found'], 200);

        }

        return response()->json($news, 200);
    }
    
    
    public function newsCreate(Request $request){

        $rules = [
            'title' => 'required|min:5',
            'description' => 'required|min:25',
            'text' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json($validator->errors(), 400);

        }

        $news = News::create($request->all());

        return response()->json($news, 201);

    }   
    
    
    public function newsUpdate(Request $request, $id){

        $rules = [
            'title' => 'required|min:5',
            'description' => 'required|min:25',
            'text' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){

            return response()->json($validator->errors(), 400);

        }

        $news = News::find($id);

        if(is_null($news)){

            return response()->json(['error' => true, 'message' => 'Not found'], 200);

        }

        $news->update($request->all());

        return response()->json($news, 200);

    }

    public function newsDelete(Request $request, $id){

        $news = News::find($id);

        if(is_null($news)){

            return response()->json(['error' => true, 'message' => 'Not found'], 200);

        }

        $news->delete();

        return response()->json('', 204);

    }
}
