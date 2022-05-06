<?php

namespace App\Http\Livewire\Admin;

use App\Models\Blog;
use App\Models\Image;
use App\Models\Video;
use Livewire\Component;
use Livewire\WithFileUploads;

class Post extends Component
{
    use WithFileUploads;
    

    public $message, $title, $short_description, $description, $src, $blog_id;
// for content of post
    public function save()
    {
        $this->validate([
            "title" => "required",
            "short_description" => "required",
            "description" => "required"
        ]);
        $postBlog = new Blog();
        $postBlog->title = $this->title;
        $postBlog->short_description = $this->short_description;
        $postBlog->description = $this->description;
        $postBlog->save();
        session()->flash("message", "Save Successfully");
    }

    // for image of post
    public function postImg()
    {
        $postImage= new Image();
        $postImage->blog_id=$this->blog_id;
        $postImage->src = $this->src->store("uploads", "public");
        $postImage->save();
    }
    // for video of post
    public function postVideo()
    {
        $postVideo= new Video();
        $postVideo->blog_id=$this->blog_id;
        $postVideo->src = $this->src;
        $postVideo->save();
    }
    public function render()
    {
        return view("livewire.admin.post",[
            'posts'=>Blog::all(),
        
        ]);
     
    }
}
