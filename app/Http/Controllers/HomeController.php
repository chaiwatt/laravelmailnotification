<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\WelcomeNofication;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    public function index(){
        $post = [
            'title' => 'post title',
            'slug' => 'post-slug'
        ];
        Notification::route('mail', [
            'joerocknpc@gmail.com' => 'chaiwat',
        ])->notify(new WelcomeNofication($post));
        dd('done');
    }

}
