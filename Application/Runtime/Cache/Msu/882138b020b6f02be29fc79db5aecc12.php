<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <title>济南大学MSU</title>

    <!-- Bootstrap Core CSS -->
    <link href="/ujn-msu/ujn_msu/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/ujn-msu/ujn_msu/Public/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/ujn-msu/ujn_msu/Public/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/ujn-msu/ujn_msu/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/ujn-msu/ujn_msu/index.php/Msu/Weihu/weihu_list">济南大学MSU</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo (session('name')); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a id="updatePassword" href="JavaScript:void(0)"><i class="fa fa-fw fa-gear"></i>修改密码</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="/ujn-msu/ujn_msu/index.php/Msu/login/loginout"><i class="fa fa-fw fa-power-off"></i> 注销</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="modal fade" id="updatePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">修改密码</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="form-control-label">输入原密码</label>
                                    <input type="password" class="form-control" id="currPassword" autocomplete="off">
                                    <input type="text" class="form-control hide" id="uid" autocomplete="off" value="<?php echo (session('uid')); ?>">

                                </div>
                                <div class="form-group" >
                                    <label class="form-control-label" >输入新密码</label>
                                    <input type="password" class="form-control" id="newPassword" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">再次输入新密码</label>
                                    <input type="password" class="form-control" id="confirm" autocomplete="off">
                                    <div class="alert alert-danger hide" id="errMsg">两次输入密码不一致</div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="updatePasswordBtn">修改</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" >
                <ul class="nav navbar-nav side-nav" style="background: #EEEEEE">
                    <li>
                        <a href="/ujn-msu/ujn_msu/index.php/Msu/weihu/weihu_list"><i class="fa fa-fw fa-wrench"></i> 维护工作记录</a>
                            <ul>
                                <li>
                                    <a href="/ujn-msu/ujn_msu/index.php/Msu/weihu/weihu_add">增加维护记录</a>
                                </li>
                                <li>
                                    <a href="/ujn-msu/ujn_msu/index.php/Msu/weihu/weihu_list">查询未完成记录</a>
                                </li>
                                <li>
                                    <a href="/ujn-msu/ujn_msu/index.php/Msu/weihu/weihu_list_yes">查询已完成记录</a>
                                </li>
                            </ul>
                    </li>
                    <li>
                        <a href="/ujn-msu/ujn_msu/index.php/Msu/count"><i class="fa fa-fw fa-bar-chart-o"></i> 工作量统计</a>
                    </li>
                    <li>
                        <a href="/ujn-msu/ujn_msu/index.php/Msu/sign"><i class="fa fa-fw fa-tag"></i> 值班签到</a>
                    </li>
                    <?php if( $_SESSION['gid']== '超级管理员' ): ?><li>
                        <a href="/ujn-msu/ujn_msu/index.php/Msu/user"><i class="fa fa-fw fa-users"></i> MSU用户管理</a>
                    </li>
                    <li>
                        <a href="/ujn-msu/ujn_msu/index.php/Msu/Ip/root_display"><i class="fa fa-fw fa-paper-plane"></i> IP段分配</a>
                    </li>
                    <li>
                        <a href="/ujn-msu/ujn_msu/index.php/Msu/web/web_list"><i class="fa fa-fw fa-money"></i> 网站缴费管理</a>
                    </li>
                    <li>
                        <a href="/ujn-msu/ujn_msu/index.php/Msu/admin"><i class="fa fa-fw fa-info"></i> 信息管理</a>
                    </li><?php endif; ?>
                   <!--  <li>
                        <a href="/ujn-msu/ujn_msu/index.php/Msu/msu"><i class="fa fa-fw fa-bar-chart-o"></i> 校园用户管理</a>
                            <ul>
                                <li>
                                    <a href="/ujn-msu/ujn_msu/index.php/Msu/msu/add_client_view">添加校园网用户</a>
                                </li>
                                <li>
                                    <a href="/ujn-msu/ujn_msu/index.php/Msu/msu/search_client_view">查询校园网用户</a>
                                </li>
                                <li>
                                    <a href="/ujn-msu/ujn_msu/index.php/Msu/msu/search_service_view">查询校园网服务</a>
                                </li>
                                <li>
                                    <a href="/ujn-msu/ujn_msu/index.php/Msu/msu/wege_payment">查询工资代扣用户</a>
                                </li>
                                <li>
                                    <a href="/ujn-msu/ujn_msu/index.php/Msu/msu/transform">用户缴费转移</a>
                                </li>
                            </ul>
                    </li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


<script type="text/javascript" src="/ujn-msu/ujn_msu/Public/js/jquery.js"></script>
<script  type="text/javascript">
//    调用修改密码模态框
$(function () {
    var $updatePasswordBtn = $("#updatePassword");
    var $modal = $("#updatePasswordModal");
    $updatePasswordBtn.on('click', function(){
        $modal.modal({backdrop:false});
//        $(".modal-backdrop").remove();
    });
});
$(function () {
    var $updatePasswordBtn = $('#updatePasswordBtn');

    var $currPassword = $('#currPassword');
    var $newPassword = $('#newPassword');
    var $confirm = $('#confirm');
    var $uid = $('#uid');

    var $errMsg = $('#errMsg');
    var showMsg = function(msg){
        $errMsg.text(msg);
        $errMsg.attr("class","alert-danger");
    };


    var hideMsg = function (errMsg) {
        errMsg.attr("class","hide");
    };
    $updatePasswordBtn.on('click',function () {
        hideMsg($errMsg);
        if ($confirm.val() !== $newPassword.val()){
            showMsg('两次输入密码不一致');
        }else if($confirm.val() === ""){
            showMsg('密码不能为空');
        }else{
                var $data = {
                    "uid" : $uid.val(),
                    "currPassword": $currPassword.val(),
                    "newPassword": $newPassword.val()
                };
                $.ajax({
                type: "PUT",
                url:'/ujn-msu/ujn_msu/index.php/Msu/user/updatePassword',
                data: $data,
                dataType:"json",
                success:function (data) {
                    if(0 === data.status) {
                        showMsg(data.info);
                    }else {
                        alert("密码修改成功");
                        $('#updatePasswordModal').modal('hide');
                        console.log(data);
                    }
                }

            })
        };



    });

})

</script>
<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">未完成维护</h1>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-success alert-dismissable fade in hidden" onclick="$(this).attr('class','alert alert-success alert-dismissable fade in hidden');">
                    <button  type="button" class="close" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle" id="tip"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="table-responsive">
                    <table class="table  table-hover table-striped">
                        <thead>
                            <tr>
                                <th>维护地点</th>
                                <th>电话</th>
                                <th>姓名</th>
                                <th>故障说明</th>
                                <th>维护地点说明</th>
                                <th>登记时间</th>
                                <th>登记员</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                    
                                    <td><a href="/ujn-msu/ujn_msu/index.php/Msu/Weihu/client_record/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["building"]); echo ($vo["unit"]); echo ($vo["room"]); ?></a></td>
                                    <td><?php echo ($vo["numbers"]); ?></td>
                                    <td><?php echo ($vo["client"]); ?></td>
                                    <td><?php echo ($vo["note"]); ?></td>
                                    <td><?php echo ($vo["location"]); ?></td>
                                    <td><?php echo ($vo["register_time"]); ?></td>
                                    <td><?php echo ($vo["adder"]); ?></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm " data-toggle="modal" data-target="#modal<?php echo ($vo["id"]); ?>">填写<span class="glyphicon glyphicon-pencil"></span></button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal<?php echo ($vo["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal">
                                                         <span aria-hidden="true">&times;</span>
                                                         <span class="sr-only">Close</span>
                                                     </button>
                                                     <h4 class="modal-title" id="myModalLabel"><?php echo ($vo["building"]); echo ($vo["unit"]); echo ($vo["room"]); ?></h4>
                                                 </div>

                                                 <!-- Modal Body -->
                                                 <div class="modal-body">
                                                    <form class="form-horizontal" role="form" action="/ujn-msu/ujn_msu/index.php/Msu/Weihu/weihu_save" method="post">
                                                        <div class="form-group">
                                                          <label class="col-sm-2 control-label">维护人员</label>
                                                          <div class="col-sm-10">
                                                            <div class="checkbox">
                                                              <div class="row">
                                                                <div class="col-xs-10">
                                                                    <?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><label>
                                                                          <input type="checkbox" name='completer[]' value="<?php echo ($user["uid"]); ?>" />  <?php echo ($user["name"]); ?>&nbsp;&nbsp;&nbsp;
                                                                      </label><?php endforeach; endif; else: echo "" ;endif; ?>  
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="col-sm-2 control-label">是否完成</label>
                                                <div class="col-sm-10">
                                                  <label>
                                                      <input type="radio" name="status" value="完成"> 完成
                                                  </label>
                                                  <label>
                                                      <input type="radio" name="status" value="未完成"/> 未完成
                                                  </label>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-2 control-label">维护类型</label>
                                            <div class="col-sm-10">
                                                <?php if(is_array($types)): $i = 0; $__LIST__ = $types;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><label>
                                                      <input type="radio" name="type" value='<?php echo ($type["id"]); ?>'> <?php echo ($type["type"]); ?> &nbsp; &nbsp;&nbsp;
                                                  </label><?php endforeach; endif; else: echo "" ;endif; ?>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-sm-2 control-label">解决方案</label>
                                        <div class="col-sm-10">
                                            <textarea name="solution" class="form-control" rows="5" id="comment"></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" name="rid" value="<?php echo ($vo["id"]); ?>">
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary tianxie" data-dismiss="modal">提交</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add<?php echo ($vo["id"]); ?>">说明<span class="glyphicon glyphicon-plus"></span>
                </button>
                <div class="modal fade" id="add<?php echo ($vo["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">
                                 <span aria-hidden="true">&times;</span>
                                 <span class="sr-only">Close</span>
                             </button>
                             <h4 class="modal-title" id="ModalLabel"><?php echo ($vo["building"]); echo ($vo["unit"]); echo ($vo["room"]); ?></h4>
                         </div>

                         <!-- Modal Body -->
                         <div class="modal-body">
                            <form class="form-horizontal" role="form" action="/ujn-msu/ujn_msu/index.php/Msu/Weihu/note_save" method="post">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">补充故障说明</label>
                                    <div class="col-sm-10">
                                      <textarea name="note" class="form-control" rows="5" id="comment"><?php echo ($vo["note"]); ?></textarea>
                                  </div>
                              </div>
                              <input type="hidden" name="rid" value="<?php echo ($vo["id"]); ?>">
                              <div class="modal-footer">
                                <button type="button" class="btn btn-primary buchong" data-dismiss="modal">提交</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-danger btn-sm delete " disabled="disabled" data-toggle="modal" data-target="#delete<?php echo ($vo["id"]); ?>" data-dismiss="modal">删除<span class="glyphicon glyphicon-trash"></span></button>
        <!--Modal-->
        <div class="modal fade" id="delete<?php echo ($vo["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                         <span aria-hidden="true">&times;</span>
                         <span class="sr-only">Close</span>
                     </button>
                     <h4 class="modal-title" id="ModalLabel"><?php echo ($vo["building"]); echo ($vo["unit"]); echo ($vo["room"]); ?></h4>
                 </div>

                 <!-- Modal Body -->
                 <div class="modal-body">
                    <form class="form-horizontal" role="form" action="/ujn-msu/ujn_msu/index.php/Msu/Weihu/weihu_delete" method="get">
                        <div class="col-md-offset-3"> <h3>确认删除该条维护记录吗？</h3></div>
                        <input type="hidden" name="rid" value="<?php echo ($vo["id"]); ?>">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                            <button type="button" class="btn btn-primary shanchu" data-dismiss="modal">确认</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
</tbody>
</table>
</div>
</div>
</div>
<!--    分页    -->
<nav>
    <center>
        <ul class="pagination"><?php echo ($show); ?></ul>
    </center>
</nav>

<div class="row">
    <div class="col-lg-12">
        <h2>维护分析</h2>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <h3>今月维护</h3>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-info-circle fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo ($record_count["total"]); ?></div>
                        <div>任务数</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-check-circle-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo ($record_count["done"]); ?></div>
                        <div>已完成</div>
                    </div>
                </div>
            </div>
            <a href="/ujn-msu/ujn_msu/index.php/Msu/weihu/weihu_list_yes">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-exclamation-circle fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo ($record_count["undone"]); ?></div>
                        <div>未完成</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

               <!-- <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> 近期维护量</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <span class="badge">just now</span>
                                        <i class="fa fa-fw fa-calendar"></i> 张艺桥完成学11-110维护工作
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">4 minutes ago</span>
                                        <i class="fa fa-fw fa-comment"></i> 天才添加了维护任务
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">23 minutes ago</span>
                                        <i class="fa fa-fw fa-truck"></i> 管理员添加了新一批维护员
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">46 minutes ago</span>
                                        <i class="fa fa-fw fa-money"></i> 上个月赵志恒贪污了998
                                    </a>
                                </div>
                                <div class="text-right">
                                    <a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> 工作量统计</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>姓名</th>
                                                <th>月份</th>
                                                <th>工作量</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($tops)): $i = 0; $__LIST__ = $tops;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tops): $mod = ($i % 2 );++$i;?><tr>
                                                    <td><?php echo ($tops["name"]); ?></td>
                                                    <td><?php echo ($tops["date"]); ?></td>
                                                    <td><?php echo ($tops["counts"]); ?></td>
                                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-right">
                                    <a href="/ujn-msu/ujn_msu/index.php/Msu/Count">查看全部工作量统计 <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/ujn-msu/ujn_msu/Public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/ujn-msu/ujn_msu/Public/js/bootstrap.min.js"></script>

    <script src="/ujn-msu/ujn_msu/Public/js/myself.js"></script>

    <script>
        $(function(){
            $('.tianxie').click(function(){
             var select = $(this).parents('form');
             
             submit(select,"/ujn-msu/ujn_msu/index.php/Msu/Weihu/weihu_submit",'POST','填写成功！');
         });
            $('.buchong').click(function(){
             var select = $(this).parents('form');
             
             submit(select,"/ujn-msu/ujn_msu/index.php/Msu/Weihu/note_save",'POST','填写成功！');
         });
            $('.shanchu').click(function(){
             var select = $(this).parents('form');
             
             submit(select,"/ujn-msu/ujn_msu/index.php/Msu/Weihu/weihu_delete",'GET','删除成功！');
         });
        });
    </script>
    <script>
        $(function(){
            if('<?php echo (session('gid')); ?>' == '超级管理员' || '<?php echo (session('gid')); ?>' == '缴费管理员')
                $(".delete").removeAttr("disabled");
        });
    </script>

</body>

</html>