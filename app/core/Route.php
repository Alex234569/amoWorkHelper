<?php
namespace app\core;

use app\controllers\PostController;

/**
 * Class Route, отвечает за подключение страниц
 * @package app\core
 */
class Route
{
    /**
     * Подключаем нужные div в зависимости от GET парамтера, получаемого с кнопок
     * @param array $get
     */
    public static function buildRoute(array $get): void
    {
        if (!empty($get)) {
            switch ($get['page']) {
                case 'Issues':
                case 'Jira':
                    break;
                case 'ErrorCode':
                    require_once DIR . '/app/views/ErrorCode.php';
                    break;
                case 'Pattern':
                    require_once DIR . '/app/views/Pattern.php';
                    break;
                default:
                    require_once DIR . '/app/views/Error404.php';
            }
        } else {
            require_once DIR . '/app/views/MainCenter.php';
        }
    }
}