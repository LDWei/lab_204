@extends("layouts.nobgimg")
@section("content")

<div class="container main-container blog-container" style="padding: 40px;">
    <div class="blog-pages">
        <div class="col-md-12 panel">
            <div class="panel-body">
        <h2 class="text-center"> 发布问题/文章</h2>
        <hr>
        <form method="POST" action="{{ url('/article_put') }}" id="article-create-form">
            <input name="_token" value="{{Auth::user()->remember_token}}" type="hidden">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                <input class="form-control" id="title" placeholder="请填写标题" name="title" value="{{ old('title') }}"  type="text">
                @if ($errors->has('title'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('cat') ? ' has-error' : '' }}">
                    <select class="form-control" name="cat">
                        <option value="unselected">选择分类</option>
                        @foreach($category as $cate)
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
                    </select>
                @if ($errors->has('cat'))
                    <span class="help-block">
                    <strong>{{ $errors->first('cat') }}</strong>
                </span>
                @endif
            </div>
            <div id="reply_notice" class="">
                <ul class="helpblock list">
                    <li>请注意单词拼写，以及中英文排版，<a href="https://github.com/sparanoid/chinese-copywriting-guidelines">参考此页</a></li>
                    <li>支持 Markdown 格式, <strong>**粗体**</strong>、~~删除线~~、<code>`单行代码`</code>, 更多语法请见这里 <a href="https://github.com/riku/Markdown-Syntax-CN/blob/master/syntax.md">Markdown 语法</a></li>
                    <li>支持表情，使用方法请见 <a href="https://laravel-china.org/topics/45" target="_blank">Emoji 自动补全来咯</a>，可用的 Emoji 请见<img title=":point_right:" alt=":point_right:" class="emoji" src="https://dn-phphub.qbox.me/assets/images/emoji/point_right.png" align="absmiddle"> <a href="https://laravel-china.org/ecc/index.html" target="_blank" rel="nofollow"> Emoji 列表 </a></li>
                    <li>上传图片, 支持拖拽和剪切板黏贴上传, 格式限制 - jpg, png, gif</li>
                    <li>发布框支持本地存储功能，会在内容变更时保存，「提交」按钮点击时清空</li>
                </ul>
            </div>

            <div id="test-editormd">
                <textarea name="test-editormd" style="display:none;"></textarea>
            </div>
            @include('markdown::encode',['editors'=>['test-editormd']])

            <div class="form-group status-post-submit">
                <button class="btn btn-primary submit-btn" type="submit">发 布</button>
                &nbsp;&nbsp;or&nbsp;&nbsp;
                <button class="btn btn-basic" type="submit" name="subject" value="draft">保存草稿</button>
            </div>
        </form>
    </div>
        </div>
    </div>
</div>


@endsection