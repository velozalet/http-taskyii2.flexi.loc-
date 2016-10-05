<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Home';
?>
<div class="site-index">
    <br><br>
    <!--Information content in tabs -->
    <div class="tabbable"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1" data-toggle="tab">Наши услуги</a></li>
            <li><a href="#tab2" data-toggle="tab">Как нас найти</a></li>
            <li><a href="#tab3" data-toggle="tab">Наши контакты</a></li>
        </ul>

        <div class="tab-content my_tab_content">
            <div class="tab-pane active" id="tab1">
                <span class="text-center span_for_title">Наши услуги</span>
                <p class="description_txt">
                    Любая система мер предусматривает эталон. Скажем, акр — это площадь, которую за день вспахивает пара волов. Ноль по Фаренгейту — температура замерзания насыщенного солевого раствора (по другим источникам — воды с нашатырем). Аршин стал по указу Петра I равен 28 английским дюймам. А английский дюйм, в свою очередь, равняется ширине большого пальца на мужской руке или, если быть точным, трем ячменным зернам, положенным вплотную друг к другу. Сегодня в мире все неметрические меры (всякие ярды с фурлонгами и унции с бушелями) определены через метрическую систему мер. До 1964 года в США метр определялся как 39,37 дюйма. Зато теперь английский дюйм совершенно четко определен как 2,54 см. А французский — как 2,706 см. К сожалению, сегодня мы точно не знаем, какого именно роста была Дюймовочка.
                </p>
                <p class="description_txt">
                    В метрической системе обычно берут за основу какой-нибудь греческий или латинский корень и приставляют его ко всему. Все эти приставки возводят десятку в какую-нибудь степень. Скажем, миллиметр — это 10−3 метров (одна тысячная метра). А километр — это 103 метров (одна тысяча метров). Все метрические обозначения нужно писать правильно, так как от этого зависит смысл: μ означает микро..., м означает милли..., м означает метр, а М — мега...
                </p>
                <p class="description_txt">
                    В характеристиках жидкокристаллических мониторов стоит обратить внимание на надпись: «диагональ экрана — 15″ (эквивалент 17″ с электронно-лучевой трубкой)». Это означает лишь то, что производители обычных кинескопов меряют диагональ, включая нерабочие области. Все равно в мире не бывает таких потребителей, которые придут в магазин с дюймовой линейкой, чтобы замерить экран. Главное — победить в борьбе красивых цифр (см. также § 70). Поскольку промышленность пока не научилась делать жидкокристаллические экраны с нерабочей областью, рекламщикам приходится выдавать тайны прошлогодних трюков.
                </p>
                <p>Источник: <a href="https://www.artlebedev.ru/kovodstvo/sections/81/" alt="some link" target="_blank">Артемий Лебедев: Сколько байтов в килобайте</a></p>
            </div>

            <div class="tab-pane fade" id="tab2">
                <span class="text-center span_for_title">Как нас найти</span>
                <p class="description_txt">
                    Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae, ut labore et dolore magnam aliquam quaerat voluptatem. ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi conseq, qui dolorem eum fugiat, quo voluptas nulla pariatur?
                </p>
                <?=Html::img('@web/img/plan_running.jpg') ?>
            </div>

            <div class="tab-pane fade" id="tab3">
                <span class="text-center span_for_title">Наши контакты</span>
                <p class="description_txt">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                </p>
                <kbd>Springfield, 742 Evergreen Terrace <br> homer@gmail.com </kbd>
            </div>
        </div>
    </div>
    <!--Information content in tabs -->
    <!--///////////////////////////////////////////////////////////////////////// -->

    <!-- Information content in Accordion effect -->
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="text-center span_for_title">Наши услуги</span></a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">  <!--class='in' -делает по умолчанию эту вкладку с контентом сразу открытой.Если class='in' убрать,-то изначально эта вкладка будет открыта-->
                <div class="panel-body">
                    <p class="description_txt">
                        Любая система мер предусматривает эталон. Скажем, акр — это площадь, которую за день вспахивает пара волов. Ноль по Фаренгейту — температура замерзания насыщенного солевого раствора (по другим источникам — воды с нашатырем). Аршин стал по указу Петра I равен 28 английским дюймам. А английский дюйм, в свою очередь, равняется ширине большого пальца на мужской руке или, если быть точным, трем ячменным зернам, положенным вплотную друг к другу. Сегодня в мире все неметрические меры (всякие ярды с фурлонгами и унции с бушелями) определены через метрическую систему мер. До 1964 года в США метр определялся как 39,37 дюйма. Зато теперь английский дюйм совершенно четко определен как 2,54 см. А французский — как 2,706 см. К сожалению, сегодня мы точно не знаем, какого именно роста была Дюймовочка.
                    </p>
                    <p>Источник: <a href="https://www.artlebedev.ru/kovodstvo/sections/81/" alt="some link" target="_blank">Артемий Лебедев: Сколько байтов в килобайте</a></p>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="text-center span_for_title">Как нас найти</span></a>
                </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="description_txt">
                        Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa. ut enim ad minima veniam, qui, quo voluptas nulla pariatur?
                    </p>
                    <?=Html::img('@web/img/plan_running.jpg') ?>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="text-center span_for_title">Наши контакты</span></a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="description_txt">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                    </p>
                    <kbd>Springfield, 742 Evergreen Terrace <br> homer@gmail.com </kbd>
                </div>
            </div>
        </div>
    </div>
    <!--/Information content in Accordion effect -->

</div>  <!--/div class="site-index"-->



<!-- --------------------------------------------------------------------------------------- -->
<br><br><br><br><br><br><br>
<div class="row">
    <code> <sub><b>Path to this view: </b> <?= __FILE__ ?> </sub></code>
    <br>
    <!--а так можно рендерить другие views в эту view -->
    <?php //echo \Yii::$app->view->renderFile('@app/views/site/hello.php'); ?>
    <?php //echo \Yii::$app->view->renderFile('@app/views/site/about.php'); ?>
    <!--/а так можно рендерить другие views в эту view -->

    <code> <sub><b>ID Controller: </b> <?= $this->context->action->uniqueId ?> </sub></code> <br>
    <code> <sub><b>ID Controller: </b> <?= $this->context->id ?> </sub></code> <br>
    <code> <sub><b>Controller Class: </b> <?= get_class($this->context) ?> </sub></code> <br>
    <code> <sub><b>This is the view content for action: </b> <?= $this->context->action->id ?> </sub></code> <br>
    <code> <sub><b>ID module: </b> <?= $this->context->module->id ?> </sub></code>
</div>

<?php
//var_dump($message);
?>
