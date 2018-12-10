<!-- header -->
<header id="header">
    <div class="container">
        <div class="navbar-backdrop">
            <div class="navbar">
                <div class="navbar-left">
                    <a class="navbar-toggle"><i class="fa fa-bars"></i></a>
                    <a href="/" class="logo"><img src="<?= $this->Url->image('logo.png') ?>" alt="logo"></a>
                        <nav class="nav">
                            <ul>
                                <li>
                                    <a href="/">Trang chủ</a>
                                </li>
                                <li>
                                    <?= $this->Html->link('Tin tức', ['controller' => 'News', 'action' => 'index'])?>
                                </li>
                                <li>
                                    <?= $this->Html->link('Diễn đàn', ['controller' => 'Forum', 'action' => 'index']) ?>
                                </li>
                                <li class="has-dropdown">
                                    <a href="forums.html">Forums</a>
                                    <ul>
                                        <li><a href="forums.html">Forum</a></li>
                                        <li><a href="forum-topic.html">Forum Topic</a></li>
                                        <li><a href="forum-post.html">Forum Post</a></li>
                                        <li><a href="forum-create.html">Forum Create</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                </div>
                <div class="nav navbar-right">
                    <ul>
                        <?php if($this->request->getSession()->read('Auth.User')): ?>
                            <li class="hidden-xs-down">
                                <?= $this->Element('Page/user_loggedin') ?>
                            </li>
                        <?php else: ?>
                            <?= $this->Element('Page/user_nonlogin') ?>
                        <?php endif;?>          
                        <li><a data-toggle="search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-search">
            <div class="container">
                <form method="post">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    <i class="fa fa-times close"></i>
                </form>
            </div>
        </div>
    </div>
</header>