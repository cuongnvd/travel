<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use App\Models\categoryTour;
use App\Models\News;
use Illuminate\Support\Facades\Redirect;session_start();
class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
       return view('admin.dashboard');
    }


    public function show_tour(){

         $listHotTour = CategoryTour::orderBy('id', 'DESC')->limit(5)->get(); //inn ra danh sach tour moi nhat 


        $listSpecialTour = CategoryTour::where('specialtour',true)->orderBy('id', 'DESC')->limit(5)->get(); //in ra danh sach tour nổi bật 

        $tourTrongNuoc = CategoryTour::where('type_in_out',false)->limit(4)->orderBy('id', 'DESC')->paginate(4); //in ra danh sach tour trong nuoc

        $tourNuocNgoai = CategoryTour::where('type_in_out',true)->limit(4)->orderBy('id', 'DESC')->paginate(4); //in ra danh sach tour nuoc ngoai

         


         return view('tourchongoi',compact(['listHotTour', 'listSpecialTour','tourTrongNuoc','tourNuocNgoai']));
    }

    //show ra tin tuc
    public function news(){
        $listHotNews = News::orderBy('id', 'DESC')->limit(5)->get(); //inn ra danh sach news moi nhat 

          $paginationNews = DB::table('News')->paginate(4);

         $listNews = News::orderBy('id', 'DESC' )->paginate(4);

         return view('diemdulich',compact(['listNews','paginationNews','listHotNews']));
    }

    // hiển thị chi tiết tour
    public function chitiet($id)
    {
        $chitiet = CategoryTour::find($id);
        
        return view('chitiettour',compact('chitiet'));
    }

    //hienthi chi tiet news
    public function chitietnews($id)
    {
        $chitietnews = News::find($id);
        $listNews = News::orderBy('id', 'DESC')->limit(5)->get(); //inn ra danh sach news moi nhat 
        
        return view('chitietnews',compact('chitietnews','listNews'));
    }


   
    public function alltourtrongnuoc(){

         

        $tourTrongNuoc = CategoryTour::where('type_in_out',false)->GetTourByDate()->orderBy('id', 'DESC')->limit(4)->paginate(4); //in ra danh sach tour trong nuoc
         
         return view('alltourtrongnuoc',compact(['tourTrongNuoc']));
        
    }

    public function alltournuocngoai(){

         

        $tourNuocNgoai = CategoryTour::where('type_in_out',true)->GetTourByDate()->orderBy('id', 'DESC')->limit(4)->paginate(4); //in ra danh sach tour nuoc ngoai


         return view('alltournuocngoai',compact(['tourNuocNgoai']));
    }




}




      
    
