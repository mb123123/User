<?php

namespace App\Admin\Actions\Grid;

use Encore\Admin\Actions\RowAction;

class Comments extends RowAction
{
    public $name = '查看评论';

    public function href()
    {
        return "/your/uri/path";
    }
}