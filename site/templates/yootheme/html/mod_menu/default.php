<?php

namespace YOOtheme;

defined('_JEXEC') or die;

list($view, $config) = app(View::class, Config::class);

$items = [];
$parents = [];

// Add module class
$attrs = ['class' => [$params['class_sfx']]];

foreach ($list as $_item) {

    $item = clone $_item;
    $item_params = $_item->getParams();
    $alias_id = $item_params['aliasoptions'];

    // set active state
    if ($item->id == $active_id || ($item->type == 'alias' && $alias_id == $active_id)) {
        $item->active = true;
    }

    if (in_array($item->id, $path)) {
        $item->active = true;
    } elseif ($item->type == 'alias') {
        if (count($path) > 0 && $alias_id == $path[count($path) - 1]) {
            $item->active = true;
        } elseif (in_array($alias_id, $path) && !in_array($alias_id, $item->tree)) {
            $item->active = true;
        }
    }

    // normalize menu item
    $item->url = $item->flink;
    $item->target = ($item->browserNav == 1 || $item->browserNav == 2) ? '_blank' : '';
    $item->active = $item->active ?: false;
    $item->divider = $item->type === 'separator';
    $item->type = in_array($item->type, ['heading', 'separator']) ? 'header' : $item->type;
    $item->class = "item-{$item->id}";

    // update menu item params
    $config->update("~theme.menu.items.{$item->id}", function ($values) use ($item_params, $view) {
        return array_merge($values ?: [], [
            'image' => empty($values['image']) ? $item_params['menu_image'] : $values['image'],
            'image-only' => empty($values['image-only']) ? !$item_params['menu_text'] : $values['image-only'],
            'image-classes' => $item_params['menu_image_css'],
        ]);
    });

    // add to parent
    if ($parent = end($parents)) {
        $parent->children[] = $item;
    } else {
        $items[] = $item;
    }

    // set/remove parent
    if ($item->deeper) {
        $parents[] = $item;
        $item->children = [];
    } elseif ($item->shallower) {
        array_splice($parents, -$item->level_diff);
    }
}

// Add "module-{id}" to <ul> on navbar position if no tag_id is specified
$layout = $config('~theme.header.layout');
if ($module->id && is_numeric($module->id) && !$params['tag_id']
    && in_array($config("~theme.modules.{$module->id}.menu_style"), ['', 'nav'])
    && (
        strpos($module->position, 'navbar') === 0 && preg_match('/^(horizontal|stacked)/', $layout)
        || $module->position === 'header' && preg_match('/^(offcanvas|modal|horizontal)/', $layout)
    )
) {
    $params['tag_id'] = "module-{$module->id}";
}

// set menu config
$config->set('~menu', [
    'tag_id' => $params['tag_id'],
    'position' => $module->position,
] + $config("~theme.modules.{$module->id}", []));

echo $view('~theme/templates/menu/menu', ['items' => $items, 'attrs' => $attrs]);
