<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNotificationsController extends Controller
{
    public function index()
    {
        $unreadNotifications = ($user = auth()->user())->unreadNotifications;
        $readedNotifications = $user->notifications->whereNotNull('read_at')->sortBy('created_at')->take(20);
        $user->unreadNotifications->markAsRead();
        return view('admin.notifications', [
            'unreadNotifications' => $unreadNotifications,
            'readedNotifications' => $readedNotifications
        ]);
    } 
}
