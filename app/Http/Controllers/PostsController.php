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
use Yaro\Jarboe\Table\Filters\TextFilter;
use Yaro\Jarboe\Table\Toolbar\MassDeleteTool;
use Yaro\Jarboe\Table\Toolbar\MassRestoreTool;
use Yaro\Jarboe\Table\Toolbar\ShowHideColumnsTool;

class PostsController extends AbstractTableController
{

    protected function init()
    {
        $this->setModel(Post::class);

        $this->addTool(new MassDeleteTool());
        $this->addTool(new ShowHideColumnsTool());

        $this->addAction(\App\Actions\ShowAction::make(), 'before', 'delete');




        $this->addFields([
            Text::make('title')->
                filter(TextFilter::make()),
            Wysiwyg::make('content')->
                filter(TextFilter::make()),
            Select::make('category_id')->
                relation('category', 'title')->
                filter(TextFilter::make())->
                type(Select::SELECT_2)->
                title('Category'),
            Tags::make('tags')->
                relation('tags','title')->
                filter(TextFilter::make())->
                ajax(true)->
                title('Tags'),
            Checkbox::make('is_published')->
                title('published it'),
        ]);
    }


    protected function can($action): bool
    {
        return $this->admin()->roles[0]->name === 'Main Admin';
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

