<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function CreatePost(Request $request)
    {
        $IncomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $IncomingFields['title'] = strip_tags($IncomingFields['title']);
        $IncomingFields['body'] = strip_tags($IncomingFields['body']);
        $IncomingFields['user_id'] = auth()->id();
        Post::create($IncomingFields);
        return redirect('/');
    }
}
