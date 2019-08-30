<?php

namespace App\Admin\Controllers;

use App\Models\comments;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use App\Admin\Actions\Post\BatchReplicate;

class CommentsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '评论';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new comments);
        
        
        $grid->filter(function($filter){

            // 去掉默认的id过滤器
            $filter->disableIdFilter();
        
            // 在这里添加字段过滤器
            $filter->group('id','评论编号', function ($group) {
                $group->gt('大于');
                $group->lt('小于');
                $group->nlt('不小于');
                $group->ngt('不大于');
                $group->equal('等于');
            });
        
        });

        $grid->actions(function ($actions) {

            // 去掉删除
            // $actions->disableDelete();
        
            // 去掉编辑
            // $actions->disableEdit();
        
            // 去掉查看
            // $actions->disableView();
            
        });
        // $grid->disableExport();//禁用导出数据按钮
        // 全部关闭
        // $grid->disableActions();

        $grid->column('id', __('评论编号'))->sortable();
        $grid->column('article_id', __('文章编号'));
        $grid->column('comment_name', __('评论名称'));
        $grid->column('comment_content', __('评论内容'));
        // $grid->column('author_reply_content', __('作者回复内容'));
        $grid->column('created_at', __('创建于'))->copyable()->qrcode()->filter('range', 'date');
        $grid->column('updated_at', __('更新于'))->copyable()->qrcode()->filter('range', 'date');
        $grid->column('date')->filter('range', 'date');
        $grid->paginate(4);     //每页几行
        $grid->batchActions(function ($batch) {
            $batch->add(new BatchReplicate());
        });
        //$grid->expandFilter();
        
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
        $show = new Show(comments::findOrFail($id));

        $show->field('id', __('评论编号'));
        $show->field('article_id', __('文章编号'));
        $show->field('comment_name', __('评论名称'));
        $show->field('comment_content', __('评论内容'));
        // $show->field('author_reply_content', __('Author reply content'));
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
        $form = new Form(new comments);

        $form->number('id', __('评论编号'))->required();
        $form->number('article_id', __('文章编号'))->required();
        $form->text('comment_name', __('评论名称'))->required();
        $form->text('comment_content', __('评论内容'))->required();
        // $form->text('author_reply_content', __('作者回复内容'));

        return $form;
    }
}
