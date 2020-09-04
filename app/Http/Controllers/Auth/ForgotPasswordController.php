<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
   

    use SendsPasswordResetEmails;



    public function getFormResetPassword(){
        return view(view:'auth.passwords.email');
    }

   

}



