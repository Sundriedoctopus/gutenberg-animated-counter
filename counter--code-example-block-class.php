<?php

namespace Original\Theme\Blocks;

class CounterBlock extends Block
{
    /**
     * A unique id/key for this Block.
     *
     * @var string
     */
    protected $unique = 'counter-block';
    
    /**
     * The "name" or "title" of the Block.
     *
     * @var string
     */
    protected $title = 'Counter Block';

    /**
     * Register settings for this Block
     *
     * @return array
     */
    protected function block() : array
    {
        return [
            'name'     => $this->unique,
            'title'    => $this->title,
            'category' => 'formatting',
            'icon'     => 'screenoptions',
            'keywords' => []
        ];
    }

    /**
     * Render this Block
     *
     * @param array $acf
     * @return string
     */
    public function callback(array $acf) : string
    {
	    require (get_template_directory().'/views/counter.php');

        return false;
    }

    /**
     * Register settings for this Blocks fields
     *
     * @return array
     */
    protected function settings() : array
    {
        return [
            'key'      => "{$this->unique}-group",
            'title'    => $this->title,
            'fields'   => [
                
            ],
            'location' => [
                [
                    [
                        'param'    => 'block',
                        'operator' => '==',
                        'value'    => "acf/{$this->unique}"
                    ]
                ]
            ]
        ];
    }
}