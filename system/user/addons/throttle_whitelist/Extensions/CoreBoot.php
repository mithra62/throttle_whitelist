<?php

namespace Mithra62\ThrottleWhitelist\Extensions;

use ExpressionEngine\Service\Addon\Controllers\Extension\AbstractRoute;

class CoreBoot extends AbstractRoute
{
    public function process()
    {
        if (ee()->config->item('enable_throttling') == 'y') {

            //config based ip array
            $whitelist = ee()->config->item('throttling_whitelist');
            if (is_array($whitelist) && count($whitelist) >= 1) {
                ee()->db->where_in('ip_address', $whitelist)->delete('throttle');
            }

            //logged in check
            if(ee()->config->item('throttle_ignore_logged_in') == 'y' &&
                ee()->session->userdata('member_id') >= 1) {
                ee()->db->where('ip_address', ee()->input->ip_address())->delete('throttle');
            }
        }
    }
}
