<?php

namespace App\Http\Controllers;
use App\Models\Category;

use App\Models\Tag;
use Yaro\Jarboe\Http\Controllers\AbstractTableController;
use Yaro\Jarboe\Table\Fields\Text;


class TagController extends AbstractTableController
{
    protected function init()
    {
        $this->setModel(Tag::class);

        $this->addFields([
            Text::make('title'),
        ]);
    }
}
