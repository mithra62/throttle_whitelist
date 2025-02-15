<?php

use ExpressionEngine\Service\Migration\Migration;

class CreateExtHookCoreBootForAddonThrottleWhitelist extends Migration
{
    /**
     * Execute the migration
     * @return void
     */
    public function up()
    {
        $addon = ee('Addon')->get('throttle_whitelist');

        $ext = [
            'class' => $addon->getExtensionClass(),
            'method' => 'core_boot',
            'hook' => 'core_boot',
            'settings' => serialize([]),
            'priority' => 10,
            'version' => $addon->getVersion(),
            'enabled' => 'y'
        ];

        // If we didnt find a matching Extension, lets just insert it
        ee('Model')->make('Extension', $ext)->save();
    }

    /**
     * Rollback the migration
     * @return void
     */
    public function down()
    {
        $addon = ee('Addon')->get('throttle_whitelist');

        ee('Model')->get('Extension')
            ->filter('class', $addon->getExtensionClass())
            ->delete();
    }
}
