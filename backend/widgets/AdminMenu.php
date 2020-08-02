<?php
namespace backend\widgets;

use yii\base\Widget;
use yii\widgets\Menu;

class AdminMenu extends Widget
{
    public static function widget($data = [])
    {
        if (\Yii::$app->user->can('createPost')) {
            die(var_dump(1111));// create post
        }
        $items = [
            [
                'label' => 'Пользователи',
                'url' => ['/users'],
                'template' => '<a href="{url}"><span class="glyphicon glyphicon-user"></span> {label}</a>',
            ],
            ['label' => 'О компании', 'url' => ['site/about']],
//            ['label' => 'Услуги',
//                'url' => '#',
//                'options'=>['class'=>'dropdown'],
//                'template' => '<a href="{url}" class="dropdown-toggle" data-toggle="dropdown">{label}</a>',
//                'items' => [
//                    ['label' => 'Юридические услуги', 'url' => ['services/juridical-services']],
//                    ['label' => 'Оценочные услуги', 'url' => ['services/valuation-services']],
//                ]
//            ],
            ['label' => 'Контакты', 'url' => ['site/contacts']]
        ];

        return Menu::widget([
            'encodeLabels'    => false,
            'options'         => ['class' => 'sidebar-left-menu'],
            'itemOptions'=>['class'=>'admin-menu-page'],
            //'submenuTemplate' => "\n<ul class=\"innerMenu\">\n{items}\n</ul>\n",
            'submenuTemplate' => "\n<ul class='dropdown-menu' role='menu'>\n{items}\n</ul>\n",
            'items'           => $items,
        ]);
    }
}
