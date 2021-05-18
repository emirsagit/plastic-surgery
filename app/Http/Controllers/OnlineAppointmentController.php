<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\User;
use App\Notifications\OnlineAppointmentNotification;
use Illuminate\Support\Facades\Notification;

class OnlineAppointmentController extends Controller
{
    public function store(AppointmentRequest $request)
    {
        foreach(config('admin.admins') as $email) {
            $admins[] = User::where('email', $email)->first();
        }
        Notification::send($admins, new OnlineAppointmentNotification($request));
    } 
}
