<?php
// Пример фасада

namespace Telniy\Larashop;

use Illuminate\Support\Facades\Facade;

class Larashop extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'Larashop'; //такую строку мы указали в нашем сервис-провайдере
        //return LarashopService::class; // можно и так, по названию класса
    }
}
