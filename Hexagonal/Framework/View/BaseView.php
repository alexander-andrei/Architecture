<?php

namespace Framework\View;


class BaseView implements ViewInterface
{
    const VIEWS_PATH = "/Presentation/Views/";

    public function createPage($data, $params = null)
    {
        $path = MAIN_DIR . self::VIEWS_PATH . $data . '.php';

        include ($path);
    }
}