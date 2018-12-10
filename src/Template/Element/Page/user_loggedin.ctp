<?php 
    $session = $this->request->getSession();
?>
<li class="dropdown dropdown-profile">
    <a href="login.html" data-toggle="dropdown"><img src="<?= $this->Url->image('user/avatar-sm.jpg')?>" alt=""> <span><?= $session->read('Auth.User.Username') ?></span></a>
    <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item active" href="#"><i class="fa fa-user"></i> Profile</a>
        <a class="dropdown-item" href="#"><i class="fa fa-envelope-open"></i> Inbox</a>
        <a class="dropdown-item" href="#"><i class="fa fa-heart"></i> Games</a>
        <a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Settings</a>
        <div class="dropdown-divider"></div>
        <?= $this->Html->link('<i class="fa fa-sign-out"></i> Đăng xuất', [
            'controller' => 'Users', 'action' => 'logout'
        ],[
            'class' => 'dropdown-item',
            'escape' => false
        ]) ?>
    </div>
</li>
<li class="dropdown dropdown-notification">
    <a href="register.html" data-toggle="dropdown">
    <i class="fa fa-bell"></i>
    <span class="badge badge-danger">2</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        <h5 class="dropdown-header"><i class="fa fa-bell"></i> Notifications</h5>
        <div class="dropdown-block">
            <a class="dropdown-item" href="#">
            <span class="badge badge-info"><i class="fa fa-envelope-open"></i></span> new email
            <span class="date">just now</span>
            </a>
            <a class="dropdown-item" href="#">
            <span class="badge badge-danger"><i class="fa fa-thumbs-up"></i></span> liked your post
            <span class="date">5 mins</span>
            </a>
            <a class="dropdown-item" href="#">
            <span class="badge badge-primary"><i class="fa fa-user-plus"></i></span> friend request
            <span class="date">2 hours</span>
            </a>
            <a class="dropdown-item" href="#">
            <span class="badge badge-info"><i class="fa fa-envelope"></i></span> new email
            <span class="date">3 days</span>
            </a>
            <a class="dropdown-item" href="#">
            <span class="badge badge-info"><i class="fa fa-video-camera"></i></span> sent a video
            <span class="date">5 days</span>
            </a>
            <a class="dropdown-item" href="#">
            <span class="badge badge-danger"><i class="fa fa-thumbs-up"></i></span> liked your post
            <span class="date">8 days</span>
            </a>
        </div>
    </div>
</li>