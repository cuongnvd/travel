<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
//session_start();
use App\Models\News;

class NewsController extends Controller
{
    public function add_news(){

    	return view('admin.add_news');
    }
     public function all_news(){

        
        $listnewS = DB::table('users')->paginate(3);

        $news = News::select('id','title','images','content','images1','images2')->orderBy('id','DESC')->paginate(3);
        // print_r($categoryTour);
        return view('admin.all_news',compact('news','listnewS'));
    }
     public function save_news(Request $request){


    	$news = new News();
    	$news->fill($request->all());

        
    	$news->save();
    	

    	
    	Session::put('message','Thêm tin tức thành công');
    	return redirect()->route('news.all');
    	}

//xóa tin tức
    public function destroy($id)
    {
        $news= News::find($id);

        $news->delete();
        return redirect()->action('NewsController@all_news')->with('message','Dữ liệu xóa thành công.');
    }

//sua tin tuc
public function edit($id)
    {
        $news = News::findOrFail($id);
        $pageName = 'News - Update';
        return view('/admin/all_news_update', compact('news', 'pageName'));

    
    }

 public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->images = $request->images;
        $news->content = $request->content;
        $news->images1 = $request->images1;
        $news->images2 = $request->images2;
        $news->save();
        return redirect()->action('NewsController@all_news')->with('message','Cập nhật thành công.');
    }

}
