<?php

$el = $this->el('ul', [

    'class' => [
        'pers',
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

$item = $this->el('li', [

    'class' => [
        'el-item',
        'uk-display-inline-block {@list_type: horizontal}',
    ],

]);

$main_title = $this->el($props['main_title_style']);

// $p = $this->el('p', [

//   'class' => [
//       'el-item',
//       '{description}'
//       'uk-display-inline-block {@list_type: horizontal}',
//   ],

// ]);
?>

  

<div id="truc" class="bg"></div>
<div class="bg2"></div>

<div class="container-pers">
  <div id="left">
    <?= $main_title() ?>
      <?php echo $props['titre_list']?>
    <?= $main_title->end() ?>
  <p><?php echo $props['description']?></p>
  </div>
  <div id="right">
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
  </div>
</div>


<style>

.bg, .bg2{
  width: 100%;
  height: 100%;
  position: absolute;
}

.bg{
 -webkit-clip-path: polygon(72% 74%, 100% 27%, 100% 100%, 5% 100%);
clip-path: polygon(72% 74%, 100% 27%, 100% 100%, 5% 100%);
  z-index: -1;
  background-color: #226dbc;
}

.bg2{
  z-index: -2;
  background-color: #2a5f98;
  -webkit-clip-path: polygon(64% 100%, 100% 27%, 62% 67%, 4% 100%);
clip-path: polygon(64% 100%, 100% 27%, 62% 67%, 4% 100%);
}

.container-pers{
  display: grid;
  grid-template-columns: 50% auto;
  height: auto;
  align-self: center;
  margin: 0 50px;
}

ul.pers{
  list-style-type: none;
  perspective: 1000px;
}

ul.pers li{
  display: grid;
   grid-template-columns: 20% auto;
  border-radius:10px;
  padding: 14px;
  cursor: pointer;
  transform: rotateY(-35deg) rotateX(15deg);
  position: absolute;
  border-bottom: 4px solid rgba(0,0,0,.2);
  border-right: 4px solid rgba(0,0,0,.2);
 
  transition: 0.7s;
  
}

ul.pers li:nth-child(1){
  color:#fff;
  background-color: #8063E1;
 background-image: linear-gradient(135deg, #BD7BE8, #8063E1);
  top: -112px;
  z-index: 2;
}

ul.pers li:nth-child(2){
   background-color: #3F58E3;
   background-image: linear-gradient(135deg, #7F94FC, #3F58E3);
  z-index: 1;
  color:white;
}

ul.pers li:nth-child(3){
  color:#fff;
  background-color: #352F64;
  background-image: linear-gradient(135deg, #415197, #352F64);
  top: 115px;
  z-index: 0;
  
}

ul.pers li:hover{
  transform: translateY(30px)  rotateY(-35deg) rotateX(15deg) scale(1.2);
  z-index:3; 
  
  
}
img{
  width:70px;
}

h1{
  font-size: 3em;
  margin-top: 0;
}

#left > p{
  color:grey;
  line-height: 1.5em;
}

</style>


