<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Mail;
use App\Mail\TourMail;
use App\Models\Order_Tours;
use App\Models\CategoryTour;
class OrderToursController extends Controller
{
     public function save_order_tours(Request $request){

        $this->validate($request,
        [
            'names' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'seats_of_number' => 'required|integer',
        ],
        [
            'required' => ':attribute không được để trống',
            'email' => ':attribute phải là định dạng email',
            'integer' => ':attribute phải là số',
             
        ],
        [
            'names' => ' Tên',
            'phone_number' => 'Số điện thoại',
            'email' => 'Email',
            'address' => 'địa chỉ',
            'seats_of_number' => 'Số vé',
        ]

        );

        $tong = $request->tong;
        $payments = $request->payments;
        $seats_of_number = $request->seats_of_number;
        $name_of_tour = $request->name_of_tour;
        $email = $request->email;
        $names = $request->names;
        $phone_number = $request->phone_number;
        $tour_id = $request->tours_id;
        
        $tour = CategoryTour::find($tour_id);
        $date_day = $tour->day_of_number;
        $date_night = $tour->number_of_night;
        $date_start = $tour->the_start_day;
        $place = $tour->place_of_departure;

        $tour_ticket = $tour->seats_of_number;
        $seats_of_number = $request->seats_of_number;
        $tour = CategoryTour::where('id', $tour_id)->update(array('seats_of_number' => $tour_ticket-$seats_of_number));
        $orderTours = new Order_Tours();
        $orderTours->fill($request->all());
        $orderTours->save();
        
        Mail::send('mailorder',[
            'names' => $names,
            'email' => $email,
            'phone_number' => $phone_number,
                'tong' => $tong,
            'day_of_number' => $date_day,
            'number_of_night' => $date_night ,
            'seats_of_number' => $seats_of_number,
            'place_of_departure' => $place,
            'the_start_day' => $date_start,
            'name_of_tour' => $name_of_tour,
        ], function($mail) use($email,$names,$phone_number){
            $mail->to($email, $names, $phone_number);
            $mail->from('tourftravel@gmail.com');
            $mail->subject('Email Ordered');
        });
        
        return redirect('thongbaodattour')->with('message', 'Bạn đã đặt tour thành công');
    }

 		public function quanlydattour(){

      
      

        $orderTours = Order_Tours::select('id','names','phone_number','email','address','tours_id','seats_of_number','name_of_tour','status','payments')->orderBy('id','DESC')->paginate(5);
        // print_r($categoryTour);
        return view('admin.quanlydattour',compact('orderTours'));
        }


        //sửa xác nhận
public function edit($id)
    {
        $orderTours = Order_Tours::findOrFail($id);
        $pageName = 'Order - Accept';
        return view('/admin/quanlydattour_update', compact('orderTours', 'pageName'));

    
    }
        //sửa xác nhân
 public function update(Request $request, $id)
    {
        $orderTours = Order_Tours::find($id);
        $orderTours->names = $request->names;
        $orderTours->phone_number = $request->phone_number;
        $orderTours->email = $request->email;
        $orderTours->name_of_tour = $request->name_of_tour;
        $orderTours->status = $request->status;

        $orderTours->save();
        return redirect()->action('OrderToursController@quanlydattour')->with('message','Cập nhật thành công.');
    }

       	
}
