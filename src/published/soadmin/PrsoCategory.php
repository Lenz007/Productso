<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use Lenz007\productso\Models\PrsoCategory;

AdminSection::registerModel(PrsoCategory::class, function (ModelConfiguration $model) {
  $model->setTitle('Категории');
    // Display
  $model->onDisplay(function () {
/*    $display = AdminDisplay::table()->setColumns([
      AdminColumn::text('name')->setLabel('Title'),
      AdminColumn::text('slug')->setLabel('Роль'),
      AdminColumn::text('slug')->setLabel('Права !!!ы'),
      ]);
    $display->paginate(15);
    return $display;*/
    $display = AdminDisplay::tree();
    $display->setValue('name');
    return $display;
  });
    // Create And Edit
  $model->onCreateAndEdit(function() {
   $form = AdminForm::panel();

     $form->setItems([
      AdminFormElement::text('name', 'Название'),
      AdminFormElement::text('slug', 'Ярлык')/*->setReadonly(true)*/,

      AdminFormElement::checkbox('showtop', 'Главное меню')->setDefaultValue(true),
      AdminFormElement::checkbox('showside', 'Боковое меню')->setDefaultValue(true),
      AdminFormElement::checkbox('showbottom', 'Меню подвала')->setDefaultValue(true),
      AdminFormElement::checkbox('showcontent', 'В спсике категорий')->setDefaultValue(true),
      AdminFormElement::ckeditor('note', 'Аннотация'),
      AdminFormElement::ckeditor('desc', 'Описание'),
      ]);
   return $form;
 });
});