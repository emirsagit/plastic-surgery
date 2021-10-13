<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\App;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\OnlineAppointmentNotification;

class OnlineAppointmentController extends Controller
{
    public function store(AppointmentRequest $request)
    {
        foreach (config('admin.admins') as $email) {
            $admins[] = User::where('email', $email)->first();
        }
        Notification::send($admins, new OnlineAppointmentNotification($request));
        return response()->json([
            'url' => $request->local === "en" ? env('APP_URL') . '/en/thanks' : env('APP_URL') . '/tr/tesekkurler'
        ]);
    }

    public function index()
    {
        return view('thanks.index');
    }
}
