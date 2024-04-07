<?php
/**
 * Jingga
 *
 * PHP Version 8.2
 *
 * @package   Modules
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

use Modules\CashManagement\Controller\BackendController;
use Modules\CashManagement\Models\PermissionCategory;
use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
    '^/accounting/cash/list(\?.*$|$)' => [
        [
            'dest'       => '\Modules\CashManagement\Controller\BackendController:viewCashList',
            'verb'       => RouteVerb::GET,
            'active'     => true,
            'permission' => [
                'module' => BackendController::NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionCategory::CASH,
            ],
        ],
    ],
    '^/accounting/cash/register(\?.*$|$)' => [
        [
            'dest'       => '\Modules\CashManagement\Controller\BackendController:viewCashList',
            'verb'       => RouteVerb::GET,
            'active'     => true,
            'permission' => [
                'module' => BackendController::NAME,
                'type'   => PermissionType::READ,
                'state'  => PermissionCategory::CASH,
            ],
        ],
    ],
];
