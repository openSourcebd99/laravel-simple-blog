<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Comment;
use Livewire\Component;

class CommentCreate extends Component
{
    public string $comment = '';

    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.comment-create');
    }

    public function createComment()
    {
        // $this->validate([
        //     'comment' => 'required|min:4'
        // ]);

        // auth()->user()->comments()->create([
        //     'body' => $this->comment,
        //     'post_id' => request()->route('post')->id
        // ]);

        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login');
        }

        Comment::create(
            [
                'comment' => $this->comment,
                'post_id' => $this->post->id,
                'user_id' => $user()->id
            ]
            );
    }
}