@extends('templates/ins/master')

@section('content')
    <div id="user">
        <div class="row">
            <div class="col-xs-12 page-title-section">
                <h1 class="pull-left">设置</h1>
                <a v-on:click="update()" class="btn btn-primary pull-right" title="Create new client">保存改动</a>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row settings-container">
            <div class="col-xs-12">
                <section>
                <div class="col-xs-12 col-md-4 left-side">
                    <a href="{{ route('profile') }}"><img class="circle" src="{{ App\User::get_gravatar(Auth::user()->email) }}"></a>
                    <div class="info">
                        <p class="name">@{{ user.full_name }}</p>
                        <p class="color-primary">@{{ user.email }}</p>
                        <p class="color-primary">@{{ user.title }}</p>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="links">
                        <p v-if="user.link">
                            <a target="_blank" href="">
                                <span class="ion-ios-world-outline"></span> @{{ user.link }}
                            </a>
                        </p>
                        <p v-if="user.twitter">
                            <a target="_blank" href="https://twitter.com/@{{ user.twitter }}">
                                <span class="ion-social-twitter"></span> https://twitter.com/@{{ user.twitter }}
                            </a>
                        </p>
                        <p v-if="user.facebook">
                            <a target="_blank" href="https://www.facebook.com/people/@{{ user.facebook }}">
                                <span class="ion-social-facebook"></span> https://www.facebook.com/people/@{{ user.facebook}}
                            </a>
                        </p>
                        <p v-if="user.linkedin">
                            <a target="_blank" href="https://www.linkedin.com/in/@{{ user.linkedin }}">
                                <span class="ion-social-linkedin"></span> https://www.linkedin.com/in/@{{ user.linkedin }}
                            </a>
                        </p>
                    </div>
                    <hr>

                    <div class="bio">
                        <p>个人简介<p>
                        <p>@{{ user.bio }}  </p>
                    </div>

                </div>
                <div class="col-xs-12 col-md-8 right-side">
                    <div class="mega-menu">
                        <p v-if="msg.error != null" class="status-msg error-msg">@{{ msg.error }}</p>
                        <p v-if="msg.success != null" class="status-msg success-msg">@{{ msg.success }}</p>
                        <div class="links">
                            <a class="" data-id="settings_info" href="">个人信息</a>
                            <a class="" data-id="settings_links" href="">链接</a>
                            <a class="" data-id="settings" href="">账户设置</a>
                        </div>
                        <div class="content">
                            <div class="item" id="settings_info">
                                <div class="form">
                                    <form>
                                        <div class="form-group">
                                            <label>全名</label>
                                            <input v-model="user.full_name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>邮件</label>
                                            <input v-model="user.email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>主题</label>
                                            <input v-model="user.title" type="title" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label>个人简介</label>
                                            <textarea v-model="user.bio" class="form-control" rows="7"></textarea>
                                            <br>
                                            <span class="count pull-right">@{{ 250 - user.bio.length }}</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="item" id="settings_links">
                                <div class="input-group">
                                    <span class="input-group-addon">链接</span>
                                    <input v-model="user.link" type="text" class="form-control" placeholder="http://www.Yourwebsite.com/">
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">Twitter</span>
                                    <input v-model="user.twitter" type="text" class="form-control" placeholder="username">
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">Facebook</span>
                                    <input v-model="user.facebook" type="text" class="form-control" placeholder="username">
                                </div><br>
                                <div class="input-group">
                                    <span class="input-group-addon">Linkedin</span>
                                    <input v-model="user.linkedin" type="text" class="form-control" placeholder="username">
                                </div>
                            </div>
                            <div class="item" id="settings">
                                <label>原密码</label>
                                {!! Form::open(array('action' => array('UsersController@resetPassword', Auth::id() ))) !!}
                                <div class="form-group">
                                    {!! Form::password( 'current_pwd', array('class' => 'form-control', "placeholder" => "原密码" )) !!}
                                </div>
                                <label>新密码</label>
                                <div class="form-group">
                                    {!! Form::password( 'new_pwd', array('class' => 'form-control', "placeholder" => "新密码" )) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::submit( '更新密码', array('class' => 'btn btn-default pull-right')) !!}
                                    <div class="clearfix"></div>
                                </div>
                                {!! Form::close() !!}
                                <hr>
                                <label>删除账户</label>
                                <p>请在文本框中输入<b> “删除”</b> 以启用删除按钮。</p>
                                <p class="dim">删除您的帐户将删除在此帐户下创建的 <b>所有</b>，客户端、项目和任务。</p>
                                <input v-model="delete_text" type="text" class="form-control">
                                <br>
                                <div v-if="delete_text == '删除' ">
                                    <button v-on:click="delete()" id="delete-account" class="btn btn-danger">删除我的账号</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </div>
    </div>

    <script>
        megaMenuInit();
    </script>
    <script src="{{ asset('assets/js/controllers/user.js') }}"></script>
@stop()
