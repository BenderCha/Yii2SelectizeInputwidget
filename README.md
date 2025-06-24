# Yii2SelectizeInputwidget
Yii2 SelectizeInput widget

# Yii2 Selectize Widget
Creater Bender
Bu Yii2 uchun yengil `Selectize.js` asosidagi widget.

## O‘rnatish
composer require bendercha/yii2-selectize-widget
composer require bendercha/yii2-selectize-widget:dev-main

## Foydalanish

<?php
use bender\selectize\SelectizeInput;

echo $form->field($model, 'tags')->widget(SelectizeInput::class, [
    'items' => ['php' => 'PHP', 'yii' => 'Yii2'],
    'clientOptions' => [
        'create' => true,
        'plugins' => ['remove_button'],
    ],
    'options' => ['multiple' => true],
]);

```bash
composer require bendercha/yii2-selectize-widget
