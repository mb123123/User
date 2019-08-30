<?php

namespace App\Admin\Controllers;

use App\Models\article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MemberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new article);

        $grid->column('article_id', __('Article id'));
        $grid->column('Article_author', __('Article author'));
        $grid->column('article_title', __('Article title'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(article::findOrFail($id));

        $show->field('article_id', __('Article id'));
        $show->field('Article_author', __('Article author'));
        $show->field('article_title', __('Article title'));
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
        $form = new Form(new article);

        $form->number('article_id', __('Article id'));
        $form->textarea('Article_author', __('Article author'));
        $form->text('article_title', __('Article title'));

        return $form;
    }
}
