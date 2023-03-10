<?php

namespace App\Http\Controllers;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

use Yaro\Jarboe\Http\Controllers\AbstractTableController;
use Yaro\Jarboe\Table\Fields\Text;
use Yaro\Jarboe\Table\Filters\TextFilter;


class CategoryController extends AbstractTableController
{
    protected function init()
    {
        $this->setModel(Category::class);

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
