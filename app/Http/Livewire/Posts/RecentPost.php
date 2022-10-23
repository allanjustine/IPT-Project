<?php

namespace App\Http\Livewire\Posts;
use App\Models\Post;
use Livewire\Component;

class RecentPost extends Component
{
    public function recentPosts (){
        $recents = Post::orderBy('created_at', 'desc')
        ->limit(50)
        ->get();

        return compact('recents');
    }
    public function render()
    {
        return view('livewire.posts.recent-post', $this->recentPosts());
    }
}
