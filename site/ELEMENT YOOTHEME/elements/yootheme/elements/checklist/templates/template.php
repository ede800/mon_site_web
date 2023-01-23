<?php

$el = $this->el($props['list_element'], [

    'class' => [
        'checklist',
        'uk-list',
        'uk-list-{list_marker} {@list_type: vertical}',
        'uk-list-{list_marker_color} {@list_type: vertical} {@!list_marker: bullet}',
        'uk-list-{list_style} {@list_type: vertical}',
        'uk-list-{list_size} {@list_type: vertical}',
        'uk-list-collapse {@list_type: horizontal}',
        'uk-column-{column}[@{column_breakpoint}]',
        'uk-column-divider {@column} {@column_divider}',
        'uk-margin-remove {position: absolute}',
    ],

]);

$item = $this->el('label', [

    'class' => [
        'el-item',
        'uk-display-inline-block {@list_type: horizontal}',
    ],

]);

?>

<?= $el($props, $attrs) ?>
<?php foreach ($children as $i => $child) : ?>

    <?= $item($props) ?>
        <?php if ($props['list_type'] == 'vertical') : ?>
        <?= $builder->render($child, ['element' => $props]) ?>
        <?php else : ?>
        <?= $builder->render($child, ['element' => $props]) . ($i != (count($children) - 1) ? $props['list_horizontal_separator'] : '') ?>
        <?php endif ?>
    <?= $item->end() ?>

<?php endforeach ?>
<?= $el->end() ?>

<style>
    .checklist {
    padding: 50px;
    position: relative;
    background: #043b3e;
    border-top: 50px solid #03a2f4;
}
.checklist h2 {
    color: #f3f3f3;
    font-size: 25px;
    padding: 10px 0;
    margin-left: 10px;
    display: inline-block;
    border-bottom: 4px solid #f3f3f3;
}
.checklist label {
    position: relative;
    display: block;
    margin: 40px 0;
    color: #fff;
    font-size: 24px;
    cursor: pointer;
}
.checklist input[type="checkbox"] {
    -webkit-appearance: none;
    display:none;
}
.checklist i {
    position: absolute;
    top: 2px;
    display: inline-block;
    width: 25px;
    height: 25px;
    border: 2px solid #fff;
}
.checklist input[type="checkbox"]:checked ~ i {
    top: 1px;
    height: 15px;
    width: 25px;
    border-top: none;
    border-right: none;
    transform: rotate(-45deg);
}
.checklist span {
    position: relative;
    left: 40px;
    transition: 0.5s;
}
.checklist span:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 1px;
    background: #fff;
    transform: translateY(-50%) scaleX(0);
    transform-origin: left;
    transition: transform 0.5s;
}
.checklist input[type="checkbox"]:checked ~ span:before {
    transform: translateY(-50%) scaleX(1);
    transform-origin: right;
    transition: transform 0.5s;
}
.checklist input[type="checkbox"]:checked ~ span {
    color: #154e6b;
}
</style>