<?php
/**
 * @package   Custom Element for Yootheme Pro
 * @author    JoomlaPro https://www.joomlapro.com/
 * @copyright Copyright (C) JoomlaPro
 * @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
 */
use YOOtheme\Builder;
use YOOtheme\Path;

return [

    'extend' => [

        Builder::class => function (Builder $builder) {
           
            $builder->addTypePath(Path::get('./elements/*/element.json'), null, 1);

        },

    ]

];
