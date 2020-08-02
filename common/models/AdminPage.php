<?php
namespace common\models;

use Yii;

class AdminPage
{
    const PAGE_USER = 1;

    // List of available pages
    public static $availablePages = [
        self::PAGE_USER,
    ];

    /**
     * Get list of pages
     *
     * @return array
     */
    public static function getList()
    {
        return [
            self::PAGE_USER => Yii::t('app', 'Users'),
        ];
    }
}
