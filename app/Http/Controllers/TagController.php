<?php

namespace App\Http\Controllers;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;

use App\Models\Tag;
use Yaro\Jarboe\Http\Controllers\AbstractTableController;
use Yaro\Jarboe\Table\Fields\Text;
use Yaro\Jarboe\Table\Filters\TextFilter;

class TagController extends AbstractTableController
{
    protected function init()
    {
        $this->setModel(Tag::class);

        $this->addFields([
            Text::make('title')->
                filter(TextFilter::make()),
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
