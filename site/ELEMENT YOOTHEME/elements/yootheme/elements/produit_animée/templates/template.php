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
@import url('https://fonts.googleapis.com/css?family=Sarala:700|Exo+2:300');

*,
*:before,
*:after{
  box-sizing: border-box;
  -webkit-tap-highlight-color: rgba(255,255,255,0);
  outline: 1px solid transparent;
}

body{ 
  display: flex;
  width: 100vw;
  height: 100vh;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-image: linear-gradient(-55deg, rgba(50,45,55,1) 0%, rgba(101,96,106,1) 100%);
  color: #f5f5f5;
  font-family: 'Exo 2';
  font-weight: 300;
  animation: fadeIn .5s cubic-bezier(0.390, 0.575, 0.565, 1.000) 1;
}

.wrapper{
  width: 280px;
  height: 480px;
  perspective: 800px;
  position: relative;
}

.card{
  width: 320px;
  height: 450px;
  position: relative;
  transform-style: preserve-3d;
  transform: translateZ(-140px);
  transition: transform 350ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
  cursor: pointer;
}

.card > div{
  position: absolute;
  width: 320px;
  height: 450px;
  padding: 34px 21px;
  transition: all 350ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
}

.front{
  background-image: linear-gradient(180deg, rgba(145,141,144,1) 0%, rgba(92,91,94,0) 100%);
  transform: rotateY(0deg) translateZ(160px); 
  border-radius: 34px 3px 0 0;
}

.right{ 
  background-image: linear-gradient(0deg, rgba(145,141,144,1) 0%, rgba(92,91,94,0) 100%);
  opacity: 0.08;
  transform: rotateY(90deg) translateZ(160px);
  border-radius: 0 0 3px 34px;
}

.card:hover{
  transform: translateZ(-160px) rotateY( -90deg);
}

.card:hover .front{
  opacity: 0; 
}

.card:hover .right{
  opacity: 1; 
}

h1,h2{
  margin: 0;
  font-size: 38px;
  letter-spacing: -.25px;
  transform: translateX(-44px);
  font-family: 'Sarala'; 
  font-weight: 700;
}

h2{
  font-size: 21px;
  transform: translateX(-34px);
}

p{
  margin: 0;
  font-weight: 300;
  font-size: 16px;
}

span{
  margin-left: 13px;
  opacity: .55;
}

img{
  transform-origin: top right;
  transition: transform 300ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
  transition-delay: 100ms;
  transform: translateX(21%) rotateZ(13deg) skewX(3deg);
  pointer-events: none;
}

.img-wrapper{
  animation: float 4s cubic-bezier(0.390, 0.575, 0.565, 1.000) infinite alternate;
  position: absolute;
  top: 0; right: 0;
  pointer-events: none;
  backface-visibility: hidden;
}

@keyframes float{
  0%{
    transform: translateZ(20px);
  }
  100%{
    transform: translateY(-21px) translateX(-13px) translateZ(30px);
  }
}

.card:hover ~ .img-wrapper img{
  transform: scale(0.9) translateX(77%) translateY(90%) rotateZ(80deg);
}

ul{
  margin-left: 21px;
  padding: 0;
  font-size: 16px;
  font-weight: 300;
  list-style: none;
}

li{
  padding-bottom: 8px;
  position: relative;
}

li:before{
  content: 'x';
  position: absolute;
  left: -21px;
  opacity: .55;
}

button{
  position: absolute;
  right: 21px; 
  bottom: 34px;
  border: none;
  box-shadow: none;
  background: none;
  color: inherit;
  font-family: 'Exo 2';
  font-weight: 300;
  font-size: 15px;  
  letter-spacing: -.25px;
  font-weight: 700;
  padding: 13px 34px;
  border-radius: 55px 55px 21px 55px;
  background-image: linear-gradient(130deg, rgba(117,51,165,1)  50%, rgba(51,46,57,.89) 100%);
  background-size: 125% 100%;
  background-position: right;
  cursor: pointer;
  box-shadow: 8px 5px 13px rgba(34,34,34,.08);
  transform: scale(0) skewY(13deg);
  transition: all 150ms cubic-bezier(0.390, 0.575, 0.565, 1.000);
  transform-origin: right bottom;
}

.card:hover button{
   transform: scale(1) skewY(0);
}

.card:not(:hover) button{
opacity: 0;
}

button:hover{
  background-position: left;
}

.price{
  position: absolute;
  bottom: 34px;
  left: 21px;
  font-size: 34px;
  opacity: .34;
}

@keyframes fadeIn{
  0%{
    opacity: 0.33;
    transform: scale(.89);
  }
}

@media only screen and (max-width: 600px){
  body{
    transform: scale(.67);
  }
}
<style>