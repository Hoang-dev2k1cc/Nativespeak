<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;
use App\Models\subtitle;
use Illuminate\Support\Facades\DB;
use App\Models\word;

class SearchController extends Controller
{

    public function searchData(Request $request, string $data)
    {
    
        if (isset($request->data)) {
            $data_search = $request->data;
        }
        if (isset($data) && $data != 0) {
            $data_search = $data;
        }
        $subtitle = subtitle::where('content','like','%'.$data_search.'%')
                                   
                                    ->join('video', 'subtitle.id_video', '=', 'video.id')
                                    ->select('content','link','start','video.id')
                                    ->orderBy('id','ASC')
                                    ->paginate(1);          
        $word = word::where('content','like',$data_search)
                        ->get();  
        $word2 = word::where('content','like','%'.$data_search.'%')->get();
        $subtitle2 = subtitle::where('content','like','%'.$data_search.'%')->get();

        return view('page.search', [
            'word2' => $word2,
            'subtitle' => $subtitle,
            'word' => $word,
            'key' => $request->data,
            'subtitle2'=> $subtitle2
        ]);
    }
}