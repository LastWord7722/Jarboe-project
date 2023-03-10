<?php

namespace App\Http\Controllers;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

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
            Tags::make('tags')->relation('tags','title')->ajax(true)->
                title('Tags'),
            Checkbox::make('is_published')->title('published it'),
        ]);
    }



    public function update(UpdateRequest $request, $id)
    {
        return parent::update($request, $id);
    }

    public function store(StoreRequest $request)
    {
        return parent::store($request);
    }
}

