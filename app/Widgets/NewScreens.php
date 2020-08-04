<?php

namespace GPOVALLAS\Widgets;

use Arrilot\Widgets\AbstractWidget;
use GPOVALLAS\Pantallas;

class NewScreens extends AbstractWidget
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
        $screens = Pantallas::orderBy('updated_at', 'DESC')
        ->where('pais_id',1)
        ->where('picture','!=',NULL)
        ->take(15)  
        ->get();

        $test = array();
        foreach ($screens as $screen){
            $test[] = $screen;
        
        }
        return view('widgets.new_screens', [
            'config' => $this->config,
            'columns' => $test
        ]);
    }}
    
