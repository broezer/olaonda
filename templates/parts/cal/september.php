<?php 
$monthName = 'september';

$prices = get_sub_field('price');
$month = get_sub_field_object($monthName);

?>

<h3><?php echo $month['label']; ?> 	&euro;<?php echo $prices[$monthName]; ?>,- </h3>     

<div class="cal cal-<?php echo $monthName;?> ">
    <?php get_template_part( 'templates/parts/cal/days'); ?>

    <?php 
        $values = get_sub_field($monthName);
        $field = get_sub_field_object($monthName);
        $choices = $field['choices'];
            foreach ($choices as $choice_value => $choice_label):?>
            <div class="div<?php  echo $choice_label?> <?php foreach ($values as $value) { if ($value['value'] == $choice_value) { echo 'checked'; } }?>">
                <?php echo $choice_label?>
            </div>
    <?php    
            endforeach;
    ?>
    <div class="div31 empty"></div>
    <div class="div32 empty"></div>
    <div class="div33 empty"></div>
    <div class="div34 empty"></div>
    <div class="div35 empty"></div>
    <div class="div36 empty"></div>
    <div class="div37 empty"></div>
    <div class="div38 empty"></div>
    <div class="div39 empty"></div>
    <div class="div40 empty"></div>
    <div class="div41 empty"></div>
    <div class="div42 empty"></div>
</div>