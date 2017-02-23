<?php
/**
 * Created by PhpStorm.
 * User: olatundeowokoniran
 * Date: 2/23/17
 * Time: 11:19 PM
 */

function dd($query) {
    echo '<pre>';
    if (is_array($query)) {
        print_r($query);
    } else {
        var_dump($query);
    }
    exit();
}

function inits_get_main_menu($id){
    $menus = wp_get_nav_menus();
    return wp_get_nav_menu_items($menus[$id]);
}