<?php

namespace GPOVALLAS\Widgets;

use Arrilot\Widgets\AbstractWidget;
use GPOVALLAS\Pantallas;

class AlertScreens extends AbstractWidget
{
    public $reloadTimeout = 10;
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //
        $screens = Pantallas::all()->where('pais_id',1)->where('estatus',2);
        return view('widgets.alert_screens', [
            'config' => $this->config,
            'columns' => $screens
        ]);
    }
}
