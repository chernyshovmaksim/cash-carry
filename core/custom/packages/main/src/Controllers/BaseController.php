<?php

namespace EvolutionCMS\Site\Controllers;

class BaseController
{
    // в эту переменную добавляйте данные,
    // которые хотите отдать в шаблоны
    public $data = [];
    public $evo;

    public function render()
    {
        // использовать для отдачи данных
    }

    public function noCacheRender()
    {
        // использовать для отдачи некэшированных данных
    }

    public function globalElements()
    {
        // тут можно отдать элементы,
        // одинаковые для всех шаблонов
    }

    public function sendToView()
    {
        // отдаём данные в шаблон
        $this->evo->addDataToView($this->data);
    }
}