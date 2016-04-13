<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use  yii\widgets\Menu;
use frontend\assets\reactasset;

reactasset::register($this);
?>
<?php $this->beginpage();
$this->context->layout='frame';
?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language ?>">
<head>
<meta charset="<?=Yii::$app->charset ?>">
<meta name="viewport"  content="width=device-width,initial-scale=1">
    <?=HTML::csrfMetaTags() ?>
    <title><?=Html::encode($this->title)?></title>
<meta  name="description" content="">
<?php $this->head();?>
</head>
    <body>
<?php $this->beginbody();?>
<ul class="nav nav-pills nav-justified"  role="tree">
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">编程语言<span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="#">PHP</a></li>
        <li><a href="#">Python</a></li>
        <li><a href="#">JAVA</a></li>
        <li><a href="#">C#</a></li>
    </ul>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">数据库<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">MySQL</a></li>
            <li><a href="#">Redis</a></li>
            <li><a href="#">Oracle</a></li>
            <li><a href="#">Mongodb</a></li>
        </ul>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">云和大数据<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">OPENSTACK</a></li>
            <li><a href="#">Hadoop</a></li>
        </ul>
    </li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">留言</a>
    </li>
</ul>
<?php
 NavBar::begin();
echo Nav::widget(['items'=>[
    ['label'=>'Programming Language','url'=>['/site/prolanguage']],
    ['label'=>'Database','url'=>['database']],
    ['label'=>'Cloud &Big data','url'=>['bigdata']],
    ['label'=>'BBS','url'=>['bbs']],
],]);
NavBar::end();

?>
<?php
echo Breadcrumbs::widget([
    'itemTemplate'=>"<li><i>{link}</i></li>\n",
    'links'=>[[
        'label'=>'首页',
        'url'=>'index.php',
        'class'=>'active',
    ],]
])
?>
<ol class="breadcrumb">
    <li><a class="active" href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
</ol>
<ul class="pager">
    <li><a href="#">&lt</a></li>
    <li><a href="#">…</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">6</a></li>
    <li><a href="#">7</a></li>
    <li><a href="#">…</a></li>
    <li><a href="#">&gt</a></li>
</ul>

<?php $this->endbody();?>
</body>
</html>
<?php $this->endpage();?>

