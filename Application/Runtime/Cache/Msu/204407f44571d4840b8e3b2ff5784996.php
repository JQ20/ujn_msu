<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <title>���ϴ�ѧMSU</title>

    <!-- Bootstrap Core CSS -->
    <link href="/ujn_msu/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/ujn_msu/Public/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/ujn_msu/Public/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/ujn_msu/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <link href="/ujn_msu/Public/css/foundation-datepicker.css" rel="stylesheet" >
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
                <a class="navbar-brand" href="/ujn_msu/index.php/Msu/Weihu/weihu_list">���ϴ�ѧMSU</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo ($name); ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> ����</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/ujn_msu/index.php/Msu/login/loginout"><i class="fa fa-fw fa-power-off"></i> ע��</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav" style="background: #EEEEEE">
                    <li>
                        <a href="/ujn_msu/index.php/Msu/weihu/weihu_list"><i class="fa fa-fw fa-wrench"></i> ά��������¼</a>
                        <ul>
                            <li>
                                <a href="/ujn_msu/index.php/Msu/weihu/weihu_add">����ά����¼</a>
                            </li>
                            <li>
                                <a href="/ujn_msu/index.php/Msu/weihu/weihu_list">��ѯδ��ɼ�¼</a>
                            </li>
                            <li>
                                <a href="/ujn_msu/index.php/Msu/weihu/weihu_list_yes">��ѯ����ɼ�¼</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/ujn_msu/index.php/Msu/count"><i class="fa fa-fw fa-bar-chart-o"></i> ������ͳ��</a>
                    </li>
                    <li>
                        <a href="/ujn_msu/index.php/Msu/sign"><i class="fa fa-fw fa-bar-chart-o"></i> ֵ��ǩ��</a>
                    </li>

                    <li>
                        <a href="/ujn_msu/index.php/Msu/user"><i class="fa fa-fw fa-bar-chart-o"></i> MSU�û�����</a>
                    </li>
                    <li>
                        <a href="/ujn_msu/index.php/Msu/Ip/root_display"><i class="fa fa-fw fa-bar-chart-o"></i> IP�η���</a>
                    </li>
                    <li>
                        <a href="/ujn_msu/index.php/Msu/web/web_list"><i class="fa fa-fw fa-bar-chart-o"></i> ��վ�ɷѹ���</a>
                    </li>
                    <li>
                        <a href="/ujn_msu/index.php/Msu/admin"><i class="fa fa-fw fa-bar-chart-o"></i> ��Ϣ����</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">������Ϣ�༭</h1>
                    </div>
                </div>
                <!-- ��ʾ���� -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success alert-dismissable fade in hidden" onclick="$(this).attr('class','alert alert-success alert-dismissable fade in hidden');">
                            <button type="button" class="close" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle" id="tip"></i>
                        </div>
                    </div>
                </div>
                <!-- �� -->
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/ujn_msu/index.php/Msu/Web/edit_post" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">����</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="dnsname" value="<?php echo ($data["dnsname"]); ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">��������</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="bmmc" value="<?php echo ($data["bmmc"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">������ַ</label>
                                <div class="col-sm-5">
                                <input type="text" class="form-control" name="jxdz" value="<?php echo ($data["jxdz"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">�����������ַ</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="fwqwlwz" value="<?php echo ($data["fwqwlwz"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">ʹ������</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control form-date" name="syqx" value="<?php echo ($data["syqx"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">�����쵼����</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="zgldxm" value="<?php echo ($data["zgldxm"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">�����쵼�칫�绰</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="zgldbgdh" value="<?php echo ($data["zgldbgdh"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">�����쵼�ֻ�</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="zgldsj" value="<?php echo ($data["zgldsj"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">�����쵼����</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="zgldemail" value="<?php echo ($data["zgldemail"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">�ֹ��쵼����</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="fgldxm" value="<?php echo ($data["fgldxm"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">�ֹ��쵼�칫�绰</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="fgldbgdh" value="<?php echo ($data["fgldbgdh"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">�ֹ��쵼�ֻ�</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="fgldsj" value="<?php echo ($data["fgldsj"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">�ֹ��쵼����</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="fgldemail" value="<?php echo ($data["fgldemail"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">ά��Ա����</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="whyxm" value="<?php echo ($data["whyxm"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">ά��Ա�칫�绰</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="whybgdh" value="<?php echo ($data["whybgdh"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">ά��Ա�ֻ�</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="whysj" value="<?php echo ($data["whysj"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">ά��Ա����</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="whyemail" value="<?php echo ($data["whyemail"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">ά��ԱQQ</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="whyqq" value="<?php echo ($data["whyqq"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">ά��Ա΢��</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="whywx" value="<?php echo ($data["whyemail"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">��ҳ������λ</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="wyzzdw" value="<?php echo ($data["wyzzdw"]); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 col-sm-offset-2 control-label">��ע</label>
                                <div class="col-sm-5">
                                    <textarea name="bz" cols="30" rows="5" class="form-control"><?php echo ($data["bz"]); ?></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary col-sm-offset-8 xiugai">�ύ�޸�</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="/ujn_msu/Public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/ujn_msu/Public/js/bootstrap.min.js"></script>
    <!-- ����ʱ��ѡ���� -->
    <script src="/ujn_msu/Public/js/foundation-datepicker.js"></script>
    <script src="/ujn_msu/Public/js/locales/foundation-datepicker.zh.js"></script>
    <script src="/ujn_msu/Public/js/myself.js"></script>
    <script>
        $(function(){
            $('.form-date').fdatepicker({
                format: 'yyyy-mm-dd hh:ii:ss',
                language: 'zh',
                pickTime: true
            });
            $('[data-toggle="popover"]').popover();
            $(".xiugai").click(function(){
                $('body').animate( {scrollTop: 0}, 50);
                var select = $(this).parents('form');
                submit(select,'/ujn_msu/index.php/Msu/Web/edit_post','POST','������Ϣ�޸ĳɹ�');
            });
        })
    </script>
</body>

</html>