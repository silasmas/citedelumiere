<?php

use Illuminate\Support\Facades\Route;
/**
 * @author Xanders
 * @see https://www.linkedin.com/in/xanders-samoth-b2770737/
 */

// Get web URL
if (!function_exists('isActive')) {
    function isActive($menu)
    {
        if (Route::current()->getName() == $menu) {
            return 'active';
        }
    }
}
if (!function_exists('badge')) {
    function badge($valeur)
    {
        switch ($valeur) {
            case 'enseignement':
                return 'badge-success';
                break;
            case 'adoration':
                return 'badge-warning';
                break;
            case 'priere':
                return 'badge-info';
                break;

            default:
                return 'badge-danger';
                break;
        }
    }
}
if (!function_exists('datas')) {
    function datas($valeur)
    {
        switch ($valeur) {
            case 'enseignement':
            // dd($enseignement);
                return $enseignement;
                break;
            case 'adoration':
                return 'adoration';
                break;
            case 'priere':
                return 'priere';
                break;

            default:
                return 'seminaire';
                break;
        }
    }
}
if (!function_exists('routes')) {
    function routes($valeur)
    {
        switch ($valeur) {
            case 'enseignement':
                return 'enseignement';
                break;
            case 'adoration':
                return 'adoration';
                break;
            case 'priere':
                return 'priere';
                break;

            default:
                return 'seminaire';
                break;
        }
    }
}
