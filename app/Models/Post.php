<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'excerpt', 'slug', 'body', "category_id"];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

// Post::create([
//     "title" => "Opini Saya Mengenai TailwindCSS",
//     "slug" => "opini-mengenai-tailwindcss",
//     "category_id" => 3,
//     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum nesciunt sint esse est amet voluptates debitis, sequi consequatur, veniam at sunt beatae alias nisi et non assumenda optio distinctio obcaecati cupiditate qui suscipit?",
//     "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum nesciunt sint esse est amet voluptates debitis, sequi consequatur, veniam at sunt beatae alias nisi et non assumenda optio distinctio obcaecati cupiditate qui suscipit?</p>

//     <p>Neque cumque similique veniam provident illo accusantium velit recusandae dolore, ex dignissimos blanditiis autem ducimus suscipit magni et ipsum voluptatem reiciendis? Quas ab iusto corrupti ut, eveniet similique tempora ducimus dignissimos dolor adipisci corporis voluptatum harum pariatur culpa magnam ea amet ex consequatur sit ad fuga dolores blanditiis ipsam. Corporis, doloribus voluptatum distinctio possimus dolore ab perferendis autem, officiis ratione velit et veritatis soluta deserunt quisquam.</p>"
// ]);
