<?php
namespace interfaces\site\body\middle\form_ask;

use boolive\basic\widget\widget;
use boolive\core\request\Request;
use boolive\core\values\Rule;

class form_ask extends widget{

    function startRule()
        {
            return Rule::arrays([
                'REQUEST' => Rule::arrays([
                   'form' => Rule::eq($this->uri())->default(false)->required(),
                    'toopic' => Rule::string()->required(),
                    'question' => Rule::string()->required(),
                    'path' => Rule::regexp('/^'.preg_quote($this->path->value(),'/').'($|\/)/ui')->required()
                ]),
            ]);
        }
    function work(Request $request){
        if ($request['form']){
            if($request['REQUEST']['agree']){
                $request->redirect('ask');
            }
        }else{
            return parent::work($request);
        }
    }
}
 