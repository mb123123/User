<?php

namespace App\Admin\Controllers;

use App\Models\articlepublication;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Post\BatchReplicate;


class Article_publicationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '文章发表';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new articlepublication);
        // $grid->actions(function ($actions) {

            // 去掉删除
            // $actions->disableDelete();
        
            // 去掉编辑
            // $actions->disableEdit();
        
            // 去掉查看
            // $actions->disableView();
        // });
        
        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();
        
            // 在这里添加字段过滤器
            // $filter->like('article_id', '文章编号');
            // $filter->scope('article_id', '文章编号')->where('article_id', '1');
            $filter->group('id','文章编号', function ($group) {
                $group->gt('大于');
                $group->lt('小于');
                $group->nlt('不小于');
                $group->ngt('不大于');
                $group->equal('等于');
            });
        });

        // 全部关闭
        // $grid->disableActions();
        $grid->column('id', __('文章编号'))->sortable();
        $grid->column('article_author', __('文章作者'));
        $grid->column('article_title', __('文章标题'));
        $grid->column('article_content', __('文章内容'))->width(200)->hide();
        $grid->column('created_at', __('创建于'))->filter('range', 'date');
        $grid->column('updated_at', __('更新于'))->filter('range', 'date');
        $grid->column('date')->filter('range', 'date');
        $grid->batchActions(function ($batch) {
            $batch->add(new BatchReplicate());
        });
        // $grid->paginate(15);
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
        $show = new Show(articlepublication::findOrFail($id));
        
        $show->field('id', __('文章编号 id'));
        $show->field('article_author', __('文章作者'));
        $show->field('article_title', __('文章标题'));
        $show->field('article_content', __('文章内容'));
        $show->field('created_at', __('创建于'));
        $show->field('updated_at', __('更新于'));
        
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new articlepublication);
        $form->number('id', __('文章编号'))->required();
        $form->text('article_author', __('文章作者'))->required();
        $form->text('article_title', __('文章标题'))->required();
        $form->textarea('article_content', __('文章内容'))->required();
        

        return $form;
    }
}
