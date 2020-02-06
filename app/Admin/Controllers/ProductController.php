<?php

namespace App\Admin\Controllers;

use App\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('ID'))->sortable();
        $grid->column('productId',__('productId'));
        $grid->column('productName',__('productName'));
        $grid->column('description',__('description'));
        $grid->column('images',__('images'));
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();


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
        $show = new Show(Product::findOrFail($id));

        $show->field('productId',__('productId'));
        $show->field('productName',__('productName'));
        $show->field('description',__('description'));
        $show->field('images',__('images'));
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
        $form = new Form(new Product());
        $form->number('productId',__('productId'));
        $form->text('productName',__('productName'));
        $form->text('description',__('description'));
        $form->text('images',__('images'));


        return $form;
    }
}
