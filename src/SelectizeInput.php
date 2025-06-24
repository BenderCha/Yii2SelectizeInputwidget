<?php

namespace bendercha\selectize;

use yii\helpers\Html;
use yii\widgets\InputWidget;
use yii\helpers\Json;

class SelectizeInput extends InputWidget
{
    public $items = [];
    public $clientOptions = [];

    public function run()
    {
        SelectizeAsset::register($this->getView());

        $id = $this->options['id'] ?? $this->getId();
        $options = Json::encode($this->clientOptions);

        echo Html::dropDownList(
            $this->name,
            $this->value,
            $this->items,
            array_merge($this->options, ['id' => $id])
        );

        $this->getView()->registerJs("$('#{$id}').selectize({$options});");
    }
}
