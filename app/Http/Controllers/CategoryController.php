<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Yaro\Jarboe\Http\Controllers\AbstractTableController;
use Yaro\Jarboe\Table\Fields\Text;


class CategoryController extends AbstractTableController
{
    protected function init()
    {
        $this->setModel(Category::class);

        $this->addFields([
            Text::make('title'),
        ]);
    }
}
