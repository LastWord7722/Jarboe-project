<?php

namespace App\Actions;

use Yaro\Jarboe\Table\Actions\AbstractAction;

class ShowAction extends AbstractAction
{
    public function render($model = null)
    {
        return view('show', compact('model'));
    }
}