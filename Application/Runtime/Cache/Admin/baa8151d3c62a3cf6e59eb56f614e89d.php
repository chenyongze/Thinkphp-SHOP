<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>编辑管理员</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="/Public/Admin/css/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：管理员管理-》编辑管理员信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="/index.php/Admin/Admin/lst">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
        <!-- 提交地址 /index.php/Admin/Admin/edt/id/4 代表当前地址 | 为空的时候也是代表当前的地址-->
            <form action="/index.php/Admin/Admin/edt/id/4" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
            <!-- 增加一个隐藏域 -->
            <input type="hidden" name="id" value="<?php echo $adminInfo['id'];?>">
            <!-- update 1. 数据 2. 更新的条件 -->
                <tr>
                    <td>管理员名称</td>
                    <td><input type="text" name="username" value="<?php echo $adminInfo['username'];?>" /></td>
                </tr>
                
                <tr>
                    <td>管理员密码</td>
                    <td><input type="password" name="password"/><font color="red">*密码留空代表不修改</font></td>
                </tr>
                 <tr>
                    <td>管理员确认密码</td>
                    <td><input type="password" name="pwd" /><font color="red">*密码留空代表不修改</font></td>
                </tr>
                <tr>
                    <td>管理员备注</td>
                    <td>
                        <textarea name="mark_up" cols="40" rows="5"><?php echo $adminInfo['mark_up'];?></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="提交">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html>