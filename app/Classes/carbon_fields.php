<?php

namespace App\Classes;

use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Carbon_Fields;


class CarbonFields
{

    public function __construct()
    {
    }

    function __init()
    {
        add_action('after_setup_theme', array($this, 'carbon_fields_init'));
        add_action('carbon_fields_register_fields', [$this, 'register_blocks']);
    }

    public function carbon_fields_init()
    {
        require_once(THEME_ROOT_PATH . '/vendor/autoload.php');
        \Carbon_Fields\Carbon_Fields::boot();
    }


    public function register_blocks()
    {

        if (file_exists(THEME_ROOT_PATH . "/app/constants/blocks/blog-blocks.json")) {

            $json_path = THEME_ROOT_PATH . '/app/constants/blocks/blog-blocks.json';

            if (file_exists($json_path)) {
                $blocks = json_decode(file_get_contents($json_path), true);
                if (isset($blocks) && is_array($blocks) && !empty($blocks)) {
                    foreach ($blocks as $block) {

                        // echo '<pre>'; print_r($block); echo '</pre>';
                        $this->register_block($block);
                    }
                }
            }
        }
    }


    function handler_fields($field)
    {
        $field_type = $field['type'];
        $field_label = $field['label'];
        $field_name = $field['key'];
        $default_value = $field['default'] ?? '';
        $placeholder = $field['placeholder'] ?? '';

        $finalType = $field_type;

        if ($field_type === 'select_color') {
            $finalType = 'select';
        }

        if ($field_type === 'url') {
            $finalType = 'text';
        }
        if ($field_type === 'number') {
            $finalType = 'text';
        }

        $carbon_field = Field::make($finalType, $field_name, $field_label);

        if ($field_type === 'image' || $field_type === 'file') {
            $carbon_field->set_value_type('id');
        }

        if ($field_type === 'url') {
            $carbon_field->set_attribute('type', 'url');
        }

        if ($field_type === 'date' && isset($field['format'])) {
            $carbon_field->set_storage_format($field['format']);
        }

        if ($field_type === 'number') {
            $carbon_field->set_attribute('type', 'number')
                ->set_attribute('min', 0);
        }

        if ($field_type === 'select' && isset($field['options'])) {
            $options = [];
            foreach ($field['options'] as $option) {
                $options[$option['value']] = $option['label'];
            }
            $carbon_field->add_options($options);
        }

        if ($field_type === 'multiselect' && isset($field['options'])) {
            $options = [];
            foreach ($field['options'] as $option) {
                $options[$option['value']] = $option['label'];
            }
            $carbon_field->add_options($options);
        }

        if ($field_type === 'checkbox') {
            $carbon_field->set_option_value('yes');
        }

        if ($field_type === 'select_color') {
            if (file_exists(get_theme_file_path("/src/constants/colors.json"))) {
                $colors = json_decode(file_get_contents(get_theme_file_path("/src/constants/colors.json")), true);
                $options = [];
                foreach ($colors as $option) {
                    $options[$option['name']] = $option['name']. ' - ' . $option['color'];
                }
                $options[$default_value] = $default_value;
                $carbon_field = Field::make('select', $field_name, $field_label)
                    ->add_options($options);
                //  ->set_default_value($default_value);
            }

            $field_type = 'select';
        }

        if (isset($field['condition'])) {
            // En Carbon Fields, el manejo de condiciones es un poco diferente y se debe ajustar a su API.
            $carbon_field->set_conditional_logic([
                'relation' => 'AND', // O 'OR' dependiendo de tus necesidades
                [
                    'field' => $field['condition']['key'],
                    'value' => $field['condition']['value'],
                    'compare' => '=',
                ]
            ]);
        }

        if ($field_type === 'icon') {

            $carbon_field->add_dashicons_options()
                ->add_fontawesome_options();
        }


        if (isset($placeholder) && $placeholder != '') {

            $carbon_field->set_attribute('placeholder', $placeholder);
        }

        if ($field_type === 'complex') {

            $carbon_field->set_layout('tabbed-vertical');

            foreach ($field['layouts'] as $layout) {
                $fields = [];
                foreach ($layout['fields'] as $f) {
                    $fields[] = $this->handler_fields($f);
                }
                $carbon_field->add_fields($layout['key'], $layout['label'], $fields);
            }

            if (isset($field['max'])) {

                $carbon_field->set_max($field['max']);
            }
        } else {

            $carbon_field->set_default_value($default_value);
        }

        return $carbon_field;
    }

    private function register_block($block)
    {
        $fields = [];
        foreach ($block['fields'] as $field) {
            $fields[] = $this->handler_fields($field);
        }

        $slug = $block['name'];
        $folder = $block['folder'];
        $name = $block['title'];

        Block::make($name)
            ->add_fields($fields)
            ->set_category($block['category'])
            ->set_icon($block['icon'])
            ->set_keywords(explode(',', $block['keywords']))
            ->set_render_callback(function ($fields, $attributes, $inner_blocks) use ($slug, $folder) {

                $c = THEME_ROOT_PATH . "/resources/views/components/blocks/{$folder}/{$slug}/{$slug}.php";

                if (file_exists($c)) {

                    $context = [
                        'slug' => $slug,
                        'fields' => $fields
                    ];

                    include($c);
                }
            });
    }
}
