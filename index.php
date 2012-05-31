<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            demo
        </title>
        <link type="text/css" href="script/jquery-ui/css/jquery-ui-1.8.20.custom.css" rel="stylesheet" />
        <script type="text/javascript" src="script/jquery-ui/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="script/jquery-ui/js/jquery-ui-1.8.20.custom.min.js"></script>
        <script type="text/javascript">
            $(function(){
                window.resizeTo(800,600);
                $('#tabs').tabs();
                $('#tabs').css('height',$(window).height()-7);
                $(window).resize(function() {
                    return;
                });
            });
        </script>
        <style type="text/css">
            /*demo page css*/
            body{ font: 12px "Trebuchet MS", sans-serif; margin: 0px;}
            .picTable{
                border: thin solid #000000;
                border-collapse: collapse;
                margin-top: 10px;
                width: 400px;
            }
            .picTable th{border: thin solid #000000;}
            .picTable td{border: thin solid #000000;text-align: center;}
	</style>
    </head>
    <body>
        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">图片管理</a></li>
                <li><a href="#tabs-2">类别管理</a></li>
                <li><a href="#tabs-3">地域管理</a></li>
            </ul>
            <div id="tabs-1">
                <form>
                    <div>
                        <span>选择类别</span>
                        <select>
                            <option>aaaaa</option>
                            <option>bbbbb</option>
                        </select>
                        <span>选择地域</span>
                        <select>
                            <option>aaaaa</option>
                            <option>bbbbb</option>
                        </select>
                        <input type="file" name="file"/>
                    </div>
                </form>
                <table class="picTable">
                    <tr>
                        <th width="50%">id</th>
                        <th>description</th>
                    </tr>
                    <tr>
                        <td>id</td>
                        <td>name</td>
                    </tr>
                </table>
            </div>
            <div id="tabs-2">
                Phasellus mattis tincidunt nibh. 
                Cras orci urna, blandit id, pretium vel, 
                aliquet ornare, felis. Maecenas scelerisque sem non nisl. 
                Fusce sed lorem in enim dictum bibendum.
            </div>
            <div id="tabs-3">
                Nam dui erat, auctor a,dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.
            </div>
	</div>
    </body>
</html>
