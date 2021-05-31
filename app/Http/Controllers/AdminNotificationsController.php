<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNotificationsController extends Controller
{
    public function index()
    {
        $unreadNotifications = ($user = auth()->user())->unreadNotifications;
        $readedNotifications = $user->notifications->whereNotNull('read_at')->sortByDesc('created_at')->take(50);
        $user->unreadNotifications->markAsRead();
        return view('admin.notifications', [
            'unreadNotifications' => $unreadNotifications,
            'readedNotifications' => $readedNotifications
        ]);
    } 
}
