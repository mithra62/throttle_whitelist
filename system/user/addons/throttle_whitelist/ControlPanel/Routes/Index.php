<?php

namespace Avenu\ThrottleWhitelist\ControlPanel\Routes;

use ExpressionEngine\Service\Addon\Controllers\Mcp\AbstractRoute;

class Index extends AbstractRoute
{
    /**
     * @var string
     */
    protected $route_path = 'settings';

    /**
     * @var string
     */
    protected $cp_page_title = 'Settings';

    /**
     * @param false $id
     * @return AbstractRoute
     */
    public function process($id = false)
    {
        $this->addBreadcrumb('settings', 'Settings');

        $variables = [
            'name' => 'My Name',
            'color' => 'Green'
        ];

        $this->setBody('index', $variables);

        return $this;
    }
}
