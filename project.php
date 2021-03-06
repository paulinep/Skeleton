<?php
/**
 * Класс
 *
 * @version 1.0
 */
use \boolive\core\request\Request;

class project extends \boolive\basic\controller\controller
{
    protected function rule()
    {
        $rule = parent::rule();
        $rule->arrays[0]['name']->min(0);
        return $rule;
    }

    function name($new_name = null, $choose_unique = false)
    {
        return parent::name($this->uri()==='/' ? null: $new_name, false);
    }

    function work(Request $request)
    {
        return $this->interfaces->start($request);
    }
}