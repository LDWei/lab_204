@extends("layouts.nobgimg")
@section("content")
    <div class="container main-container " style="padding: 40px;">
        <div class="users-show">
            @include('layouts.partials.editleft')
            <div class="col-md-9  left-col ">
                <div class="panel panel-default padding-md" style="border-style: solid; border-width: 1px;border-color: #ccc">
                    <div class="panel-body ">
                        <h2>
                            <i class="fa fa-cog" aria-hidden="true"></i> 编辑个人资料</h2>
                        <hr>
                        <form class="form-horizontal" method="POST" action="https://laravel-china.org/users/16876" accept-charset="UTF-8" enctype="multipart/form-data">
                            <input name="_method" value="PATCH" type="hidden"><input name="_token" value="u5odx7F7KVb2Sj1VIMwsHg0PybSxgPJ0TtFemCy5" type="hidden"><div class="form-group">
                                <label for="" class="col-sm-2 control-label">性别</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="gender"><option value="unselected">未选择</option>
                                        <option value="male">男</option>
                                        <option value="female">女</option></select>
                                </div>

                                <div class="col-sm-4 help-block"></div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">GitHub Name</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="github_name" value="" type="text">
                                </div>

                                <div class="col-sm-4 help-block">
                                    请跟 GitHub 上保持一致
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">邮 箱</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="email" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：name@website.com
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">真实姓名</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="real_name" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：李小明
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">城市</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="city" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：北京、广州
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">公司</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="company" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：阿里巴巴
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">微博用户名</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="weibo_name" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：Overtrue
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">微博个人页面</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="weibo_link" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    微博个人主页链接，如：http://weibo.com/laravelnews
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">Twitter 帐号</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="twitter_account" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：summer_charlie
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">LinkedIn</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="linkedin" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    你的 <a href="https://www.linkedin.com">LinkedIn</a> 主页完整 URL 地址，如：https://cn.linkedin.com/in/summerblue
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">个人网站</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="personal_website" value="" type="text">
                                </div>
                                <div class="col-sm-4 help-block">
                                    如：example.com，不需要加前缀 https://
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="wechat_qrcode" class="col-sm-2 control-label">微信账号二维码</label>
                                <div class="col-sm-6">
                                    <input name="wechat_qrcode" type="file">
                                </div>
                                <div class="col-sm-4 help-block">
                                    你的微信个人账号，或者订阅号
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">支付二维码</label>
                                <div class="col-sm-6">
                                    <input name="payment_qrcode" type="file">
                                </div>
                                <div class="col-sm-4 help-block">
                                    文章打赏时使用，微信支付二维码
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">个人简介</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="3" name="introduction" cols="50" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 121px;"></textarea>
                                </div>
                                <div class="col-sm-4 help-block">
                                    请一句话介绍你自己，大部分情况下会在你的头像和名字旁边显示
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label">署名</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" rows="3" name="signature" cols="50" style="overflow: hidden; overflow-wrap: break-word; resize: horizontal; height: 121px;"></textarea>
                                </div>
                                <div class="col-sm-4 help-block">
                                    文章署名，会拼接在每一个你发表过的帖子内容后面。支持 Markdown。
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-6">
                                    <input class="btn btn-primary" id="user-edit-submit" value="应用修改" type="submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection