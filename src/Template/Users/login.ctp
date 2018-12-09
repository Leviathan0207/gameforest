<!-- main -->
<section class="bg-image player p-y-70" style="background-image: url('https://img.youtube.com/vi/1GWRDuL04-Q/maxresdefault.jpg');" data-property="{videoURL:'1GWRDuL04-Q',containment:'self', stopMovieOnBlur:false, showControls: false, realfullscreen: true, showYTLogo: false, quality: 'highres',autoPlay:true,loop:true,opacity:1}">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-4 mx-auto">
                <div class="card m-b-0">
                    <div class="card-header">
                        <h4 class="card-title"><i class="fa fa-sign-in"></i> Login to your account</h4>
                    </div>
                    <div class="card-block">
                        <?= $this->Form->create(); ?>
                            <a class="btn btn-social btn-facebook btn-block btn-icon-left" href="" role="button"><i class="fa fa-facebook"></i> Connect with Facebook</a>
                            <div class="divider">
                                <span>or</span>
                            </div>
                            <div class="form-group input-icon-left m-b-10">
                                <i class="fa fa-user"></i>
                                <?= $this->Form->input('Email',['type'=>'email','class'=>'form-control form-control-secondary','placeholder'=>'Email','label'=>false]);?>         
                                <!-- <input type="email" class="form-control form-control-secondary" placeholder="Username"> -->
                            </div>
                            <div class="form-group input-icon-left m-b-15">
                                <i class="fa fa-lock"></i>
                                <?= $this->Form->input('Password',['type'=>'password','class'=>'form-control form-control-secondary','placeholder'=>'Password','label'=>false]);?>   
                                <!-- <input type="password" class="form-control form-control-secondary" placeholder="Password"> -->
                            </div>
                            <label class="custom-control custom-checkbox custom-checkbox-primary">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Remember me</span>
                            </label>
                            <!-- <button type="submit" class="btn btn-primary btn-block m-t-10">Login <i class="fa fa-sign-in"></i></button> -->
                            <?=$this->Form->submit('Login',['class'=>'btn btn-primary btn-block m-t-10'])?>
                            <div class="divider">
                                <span>Don't have an account?</span>
                            </div>
                            <?= $this->Html->link('Đăng ký', ['controller' => 'Users', 'action' => 'register'],[
                                'class' => 'btn btn-secondary btn-block',
                                'role' => 'button'
                            ]) ?>
                        <?=$this->Form->end();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /main -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $(".player").mb_YTPlayer();
    })
</script>