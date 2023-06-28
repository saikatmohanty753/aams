<?php
namespace App\Repositories;

use App\Interfaces\IntegrationInterface;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Models\User;

class IntegrationRepository implements IntegrationInterface{
    public function sendMail($email='',$msg)
    {
        try{
            Mail::to($email)->send(new SendMail($msg));
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
