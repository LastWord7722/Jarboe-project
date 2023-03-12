<?php

namespace App\Toolbar;

use App\Models\Post;
use Illuminate\Http\Request;
use Yaro\Jarboe\Table\Toolbar\AbstractTool;

class FilterTool extends AbstractTool
{
    public function render()
    {
        return view('admin.toolbar.filterAZ');
    }


    public function handle(Request $request)
    {
        dd($request);
    }

    public function position()
    {
        return self::POSITION_BODY_TOP;
    }

    public function  identifier(): string
    {
        // TODO: Implement identifier() method.
        return 'admin.toolbar.filterAZ';
    }

    public function check(): bool
    {
        return true;
    }
}