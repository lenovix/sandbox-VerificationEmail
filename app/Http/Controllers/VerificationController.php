<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function notice()
    {
        return "Mohon untuk melakukan verifikasi terlebih dahulu";
    }
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return "akun berhasil diverifikasi, selamat datang di dashboard";
    }
}
