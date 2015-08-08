<div class="layout">
    <div class="head">
<!--        --><?//=$v['head']->string()?>
        <div class="head__menu">
            <?=$v['menu_side']->string()?>
         </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-xs-2 col-md-offset-1">
            <div class="left-panel ">
                <a href="sign-in"> Войти на сайт </a>
            </div>
        </div>
        <div class="col-md-7 col-xs-3"><?=$v['middle']->string()?></div>
    </div>
    <div class="footer">
        <?=$v['footer']->string()?>
    </div>
</div>