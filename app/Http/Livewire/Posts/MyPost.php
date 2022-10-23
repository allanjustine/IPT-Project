<?php

namespace App\Http\Livewire\Posts;
use App\Models\Post;
use Livewire\Component;

class MyPost extends Component
{
    public $title, $content;

    public function addPost() {
        $this->validate([
            'content'               =>      ['required', 'string', 'max:255'],
        ]);

        Post::create([
            'user_id' => auth()->user()->id,
            'title'                   =>      $this->title,
            'content'                 =>      $this->content
        ]);

        return redirect('/my-post')->with('message', 'Posted');
    }

    public function loadPost() {
        $posts = Post::where ('user_id', auth()->user()->id)
        ->orderBy('created_at', 'desc')
        ->limit(50)
        ->get();

        return compact('posts');
    }

    public function render()
    {
        return view('livewire.posts.my-post', $this->loadPost());
    }
}
