<?php

namespace App\Http\Controllers;
use App\Models\Post;

use App\Models\Tag;
use Yaro\Jarboe\Http\Controllers\AbstractTableController;
use Yaro\Jarboe\Table\Fields\Checkbox;
use Yaro\Jarboe\Table\Fields\Select;
use Yaro\Jarboe\Table\Fields\Tags;
use Yaro\Jarboe\Table\Fields\Text;
use Yaro\Jarboe\Table\Fields\Wysiwyg;

class PostsController extends AbstractTableController
{
    protected function init()
    {

        $this->setModel(Post::class);

        $this->addFields([
            Text::make('title'),
            Wysiwyg::make('content'),
            Select::make('category_id')->relation('category', 'title')->
                type(Select::SELECT_2)->title('Category'),
            Tags::make('tag_id')->relation('tags','title')->ajax(true)->
                title('Tags'),
            Checkbox::make('is_published')->title('published it'),
        ]);
    }
}
