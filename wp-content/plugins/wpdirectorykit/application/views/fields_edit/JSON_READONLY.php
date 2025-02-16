<?php
/**
 * The template for Edit field TEXTAREA.
 *
 * This is the template that field layout for edit form
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php

//wmvc_dump($field);

if(isset($field->field))
{
    $field_id = $field->field;
}
else
{
    $field_id = 'field_'.$field->idfield;
}

if(!isset($field->hint))$field->hint = '';
if(!isset($field->columns_number))$field->columns_number = '';
if(!isset($field->class))$field->class = '';

$field_label = $field->field_label;

$required = '';
if(isset($field->is_required) && $field->is_required == 1)
    $required = '*';

if(isset($field->rules) && strpos($field->rules, 'required') !== FALSE)
    $required = '*';

?>

<div class="wdk-field-edit <?php echo esc_attr($field->field_type); ?> wdk-col-<?php echo esc_attr($field->columns_number); ?> <?php echo esc_attr($field->class); ?>">
    <label for="<?php echo esc_attr($field_id); ?>"><?php echo esc_html($field_label).esc_html($required); ?></label>
    <div class="wdk-field-container">
        <span class="regular-span" style="">
            <?php 
            $json_data = wmvc_show_data(esc_attr($field_id), $db_data, '', FALSE);
            if(!empty($json_data)) :
                $json_data = json_decode($json_data);
            ?>
                <?php foreach ($json_data as $key => $value) : ?>
                    <?php if(in_array(strtolower($key), array('element_id','eli_id','eli_type','eli_page_id','action','message'))) continue;?>
                    <?php if (!empty($value)) : ?>
                        <p>
                            <?php if(filter_var($value, FILTER_VALIDATE_URL ) || strpos( $value, 'http' ) !== FALSE):?>
                                <strong><?php echo esc_html__(ucfirst(str_replace('_', ' ', $key)),'wpdirectorykit'); ?>:</strong> <a href="<?php echo esc_url($value);?>"><?php echo wp_kses_post($value); ?></a><br />
                            <?php else : ?>
                                <strong><?php echo esc_html__(ucfirst(str_replace('_', ' ', $key)),'wpdirectorykit'); ?>:</strong> <?php echo wp_kses_post($value); ?><br />
                            <?php endif; ?>
                        </p>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif;?>
        </span>
        <?php if(!empty($field->hint)):?>
        <p class="wdk-hint">
            <?php echo esc_html($field->hint); ?>
        </p>
        <?php endif;?>
    </div>
</div>