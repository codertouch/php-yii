<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/7
 * Time: 11:07
 */

?>
<!DOCTYPE html>
    <html>
<head>
    <title>first React!</title>
    <script src="./react/build/react.js"></script>
    <script src="./react/build/JSXTransformer.js"></script>
</head>
<body>
<div id="ss"></div>
<script type="text/jsx">
    var FirstReact=React.createClass(
        {
            render:function () {
                return(
                    <p>
                        Firstreact,<input type="text" placeholder="Your name here"/>!
                    It is{this.props.date.toTimeString()}
                    </p>
                );
            }
        }
    );
    setInterval(function () {
        React.render(
            <First-React date={new Date()}/>,
            document.getElementById('ss')
        );
    },1000);
</script>
111
</body>
</html>
