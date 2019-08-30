<?php

namespace App\Admin\Controllers;

use App\Models\testssss;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Post\BatchReplicate;

class TestssssController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\testssss';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {   
        $grid = new Grid(new testssss);
        

        $grid->column('id', __('Id'));
        $grid->column('txt', __('Txt'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        
        $grid->batchActions(function ($batch) {
            $batch->add(new BatchReplicate());
        });
        
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(testssss::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('txt', __('Txt'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new testssss);

        $form->number('id', __('Id'));
        $form->textarea('txt', __('Txt'));

        return $form;
    }
}
