<?php

// Image Align
$grid = $this->el('div', [

    'class' => [
        'uk-grid-small uk-child-width-expand uk-flex-nowrap',
        'uk-flex-middle {@image_vertical_align}',
    ],

    'uk-grid' => true,
]);

$cell_image = $this->el('div', [

    'class' => [
        'uk-width-auto',
        'uk-flex-last {@image_align: right}',
    ],

]);

// Image
if ($props['image']) {

    $image = $this->el('image', [

        'class' => [
            'el-image',
            'uk-border-{image_border}',
            'uk-text-{image_svg_color} {@image_svg_inline}' => $this->isImage($props['image']) == 'svg',
        ],

        'src' => $props['image'],
        'alt' => $props['image_alt'],
        'width' => $element['image_width'],
        'height' => $element['image_height'],
        'uk-svg' => $element['image_svg_inline'],
        'thumbnail' => true,
    ]);

    $props['image'] = $image($element);

} elseif ($props['icon'] || $element['icon']) {

    $icon = $this->el('span', [

        'class' => [
            'el-image',
            'uk-text-{icon_color}',
        ],

        'uk-icon' => [
            'icon: {icon};',
            'width: {icon_width};',
            'height: {icon_width};',
        ],

    ]);

    $props['image'] = $icon(array_merge($element, array_filter($props)), '');
}

// Content
$content = $this->el($element['list_type'] == 'vertical' ? 'div' : 'span', [

    'class' => [
        'el-content',
        'uk-panel {@list_type: vertical}',
        'uk-[text-{@content_style: bold|muted}]{content_style}',
    ],

]);

// Horizontal List: Image is content
if ($props['image'] && $element['list_type'] == 'horizontal') {

    $text = $this->el('span', [

        'class' => [
            'uk-text-middle uk-margin-remove-last-child',
        ],

    ]);

    $props['content'] = $text($element, $props['content']);

    if ($element['image_align'] == 'left') {
        $props['content'] = $props['image'] . ' ' . $props['content'];
    } else {
        $props['content'] = $props['content'] . ' ' . $props['image'];
    }

    $props['image'] = '';

}

// Link
$link = $props['link'] ? $this->el('a', [
    'href' => $props['link'],
    'target' => ['_blank {@link_target}'],
    'uk-scroll' => str_starts_with((string) $props['link'], '#'),
]) : null;

if ($link) {

    $props['content'] = $link($props, ['class' => [

        'el-link',
        'uk-link-{0}' => $element['link_style'],
        'uk-margin-remove-last-child',

    ]], $this->striptags($props['content']));

    if ($props['image']) {
        $props['image'] = $link($props, $props['image']);
    }
}

?>

<?php if ($props['image']) : ?>
    <?= $grid($element) ?>
        <?= $cell_image($element, $props['image']) ?>
        <div>
            <?= $content($element, $props['content'] ?: '') ?>
        </div>
    </div>
<?php else : ?>
    <input type="checkbox" name="" id="" />
    <i></i>
    <span><?= substr($props['content'], 0, 75) ?></span>
<?php endif ?>
