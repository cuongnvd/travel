<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use DB;
use Mail;
use Session;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
//session_start();
use App\Models\Contact;
class ContactController extends Controller
{
      public function save_contact(Request $request)
      {

       $this->validate($request,
        [
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'content' => 'required',
        ],
        [
            'required' => ':attribute không được để trống',
            'email' => ':attribute phải là định dạng email',
            
             
        ],
        [
            'name' => ' Tên',
            'phone_number' => 'Số điện thoại',
            'email' => 'Email',
            'title' => 'Tiêu đề',
            'content' => 'Nội dung',
        ]

           

    );

        $content = $request->content;
        $title = $request->title;
        $email = $request->email;
        $phone_number = $request->phone_number;
        $name = $request->name;
        $conTact = new Contact();
        $conTact->fill($request->all());
        $conTact->save();
        

        Mail::send('mailcontact',[
            'name' => $name,
            'email' => $email,
            'phone_number' => $phone_number,
            'title' => $title,
            'content' => $content,
           
        ], function($mail) use($email){
            $mail->to('tourftravel@gmail.com');
            $mail->from($email);
            $mail->subject('Email conTact');
        });
        
        return redirect()->back()->with('message', 'Gửi thành công');
        
    }
    public function quanlyphanhoi(){

        $listContact = Contact::orderBy('id', 'DESC')->limit(5)->paginate(5);
      

        $conTact = Contact::select('id','name','phone_number','email','title','content','status')->orderBy('id','DESC')->paginate(5);
        // print_r($categoryTour);
     return view('admin.quanlyphanhoi',compact('conTact','listContact'));
        }

           //sửa liên hệ xác nhận
    public function edit($id)
        {
            $conTact = Contact::findOrFail($id);
            $pageName = 'Contact - Accept';
            return view('/admin/quanlyphanhoi_update', compact('conTact', 'pageName'));

        
        }
        
     public function update(Request $request, $id)
        {
            $conTact = Contact::find($id);
            $conTact->name = $request->name;
            $conTact->phone_number = $request->phone_number;
            $conTact->email = $request->email;
            $conTact->title = $request->title;
            $conTact->content = $request->content;
            $conTact->status = $request->status;

            $conTact->save();
            return redirect()->action('ContactController@quanlyphanhoi')->with('message','Cập nhật thành công.');
        }
 		








}
