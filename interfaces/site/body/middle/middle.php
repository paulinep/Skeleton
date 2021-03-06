<?php
/**
 * middle
 * @aurhor Vladimir Shestakov
 * @version 1.0
 */
namespace interfaces\site\body\middle;

use boolive\basic\widget\widget;
use boolive\core\request\Request;
use boolive\core\values\Rule;

class middle extends widget
{
    function startRule()
    {
        return Rule::arrays([
            'REQUEST' => Rule::arrays([
                'object' => Rule::entity(),
            ]),
            //'previous' => Rule::eq(false)
        ]);
    }

    function show($v, Request $request)
    {
        $v['content'] = $this->content->linked()->start($request);
        $v['form_agree'] = $this->form_agree->linked()->start($request);
        $v['form_auth'] = $this->form_auth->linked()->start($request);
        $v['profile'] = $this->profile->linked()->start($request);
        return parent::show($v, $request);
    }
} 