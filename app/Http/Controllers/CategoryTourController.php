<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
//session_start();
use App\Models\CategoryTour;

class CategoryTourController extends Controller
{
    public function add_tour(){

    	return view('admin.add_tour');
    }
     public function all_tour(){

   


        $categoryTour = CategoryTour::select('id','name_of_tour','cost','content')->orderBy('id','DESC')->paginate(3);
        // print_r($categoryTour);
    	return view('admin.all_tour',compact('categoryTour'));
    }

    public function save_category_tour(Request $request){

        $this->validate($request,
            [
             
                'cost' => 'required|integer',
                'day_of_number' => 'required|integer',
                'number_of_night' => 'required|integer',
                'seats_of_number' => 'required|integer',
                
            ],
            [
                'required' => ':attribute không được để trống',
                
                 'integer' => ':attribute phải là số'   
            ],
            [
                'cost' => ' Giá tour',
                'day_of_number' => ' Số ngày',
                'number_of_night' => ' Số đêm',
                'seats_of_number' => ' Số chỗ',            
            ]
        );


    	$categoryTour = new CategoryTour();
    	$categoryTour->fill($request->all());
    	$categoryTour->save();
    	

    	
    	Session::put('message','Thêm danh mục tour thành công');
    	return redirect()->route('tour.all');
    	}

//xoa tour
public function destroy($id)
    {
        $categoryTour= CategoryTour::find($id);

        $categoryTour->delete();
        return redirect()->action('CategoryTourController@all_tour')->with('message','Dữ liệu xóa thành công.');
    }


    //sua tour
      public function edit($id)
    {
        $categoryTour = CategoryTour::findOrFail($id);
        $pageName = 'Tour - Update';
        return view('/admin/all_tour_update', compact('categoryTour', 'pageName'));
    }
     public function update(Request $request, $id)
    {


        $this->validate($request,
            [
             
                'cost' => 'required|integer',
                'day_of_number' => 'required|integer',
                'number_of_night' => 'required|integer',
                'seats_of_number' => 'required|integer',
                
            ],
            [
                'required' => ':attribute không được để trống',
                
                 'integer' => ':attribute phải là số'   
            ],
            [
                'cost' => ' Giá tour',
                'day_of_number' => ' Số ngày',
                'number_of_night' => ' Số đêm',
                'seats_of_number' => ' Số chỗ',            
            ]
        );

        
        $categoryTour = CategoryTour::find($id);
        $categoryTour->name_of_tour = $request->name_of_tour;

        $categoryTour->cost = $request->cost;


        $categoryTour->the_start_day = $request->the_start_day;

        $categoryTour->the_end_day = $request->the_end_day;

        $categoryTour->day_of_number = $request->day_of_number;

        $categoryTour->number_of_night = $request->number_of_night;

        $categoryTour->seats_of_number = $request->seats_of_number;

        $categoryTour->content = $request->content;

        $categoryTour->images = $request->images;

         $categoryTour->images1 = $request->images1;

          $categoryTour->images2 = $request->images2;

        $categoryTour->types_of_tour_id = $request->types_of_tour_id;

        $categoryTour->type_in_out = $request->type_in_out;

        $categoryTour->note = $request->note;

         $categoryTour->place_of_departure = $request->place_of_departure;
         
        $categoryTour->save();
        return redirect()->action('CategoryTourController@all_tour')->with('message','Cập nhật thành công.');
    }
    //trang tim kiem
    public function timkiem(Request $request)
    {
      $tukhoa = $request->tukhoa;
      $tour = CategoryTour::where('name_of_tour','like',"%$tukhoa%")->GetTourByDate()->orWhere('cost','like',"%$tukhoa%")->orWhere('day_of_number','like',"%$tukhoa%")->paginate(4);
      return view('timkiem',['tour'=>$tour,'tukhoa'=>$tukhoa]);
    }
}
