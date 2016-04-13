<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/5
 * Time: 16:55
 */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\assets\reactasset;
use common\widgets\Alert;

reactasset::register($this);

?>
<?php
$this->beginpage();?>
<!DOCTYPE html>
    <html lang="<?YII::$app->language?>">
<head>
    <meta charset="<?YII::$app->charset?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="descripiton" content="">
</head>
<body>
<?php
$this->beginbody();
?>

<header class="header">
<nav>
    <div style="float: right;margin-right: 30px">
    用户名<input type="text" class="input-sm" name="inp-username">
    密   码<input type="text" class="input-sm" name="inp-userpwd">
    <button class="btn btn-default" type="submit" name="btn-signiin">登录</button>
    <button class="btn btn-default" type="button" name="btn-forgetpwd">忘记密码</button>
    <button class="btn btn-default" type="button" name="btn-signup">注册</button>
    </div>
        <div class="btn-group"><button>1</button><button>2</button><button>3</button></div>
    <div>登录</div>
    <div>三种（QQ、微博、）快速注册登录接口</div>
    <form class="nav .col-md-8">

    </form>
</nav>
    <br/><br/><br/><br/>
    <div id="reactexample" name="reactexample"></div>
    <script type="text/jsx">
        var HelloWorld = React.createClass(
            {
                render:function () {
                    return (
                        <p>Hello,<input type="text" placeholder="111"/>!
                            It is { this.props.date.toLocaleTimeString()}
                            </p>
                    );
                }
            }
        );
        setInterval(function () {
            react.render(
                <HelloWorld date={new Date()} />,
                document.getElementsById('reactexample')
            );
        },1000)
    </script>
    <table class="table table-hover table-bordered table-condensed">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
        </tr>
    </table>
</header>

<?=$content?>

<footer class="footer">
    <div class="container">
        <p>&copy;Codertouch<?=date('Y') ?></p>
    </div>
</footer>
<?php $this->endbody(); ?>
</body>
</html>
<?php $this->endpage(); ?>
