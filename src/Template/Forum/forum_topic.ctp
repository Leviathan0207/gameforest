<?= $this->Element('Page/breadcrumbs') ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>

<section class="p-t-40">
    <div class="container">
        <div class="forum-headline forum-panel">
            <h5 class="float-left">Topic Title <span>Short topic description goes here.</span></h5>
            
            <a class="btn btn-primary btn-shadow float-right" href="<?= $this->Url->build(['controller' => 'Forum', 'action' => 'createTopic']) ?>" role="button">New topic <i class="fa fa-plus"></i></a>
        </div>
        <div class="forum">
            <div class="forum-head">
                <div></div>
                <div style="width: 65%">Topic</div>
                <div style="width: 7%">Replies</div>
                <div style="width: 7%">Views</div>
                <div style="width: 20%">Most Recent</div>
            </div>
           
            <?php foreach ($posts as $post):?>              
                <div class="forum-group">              
                    <div class="forum-row">
                        <div class="forum-icon">
                            <span class="badge badge-warning"><i class="fa fa-thumb-tack"></i></span>
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="forum-title">
                            <h4><a href="<?= $this->Url->build(['controller'=>'Forum','action'=>'viewTopic',$post->PostSlug]) ?>"><?= h($post->PostTitle) ?></a></h4>
                            <p>by <?=h($post->PostAuthor)?> on <?=h($post->PostDate)?></p>
                           
                        </div>
                        <div class="forum-thread">57</div>
                        <div class="forum-thread">405</div>
                        <div class="forum-latest">
                            <a href="profile.html"><img src="img/user/user-2.jpg" alt=""></a>
                            <div>
                                <h5><a href="forum-post.html"><?=h($post->PostAuthor)?></a></h5>
                                <span><?=h($post->PostDate)?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                
            <!-- <div class="forum-group">
                <div class="forum-row">
                    <div class="forum-icon">
                        <span class="badge badge-primary"><i class="fa fa-thumb-tack"></i></span>
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">Games Discussion Lounge - Express Yourself!</a></h4>
                        <p>by Admin on May 16, 2017</p>
                    </div>
                    <div class="forum-thread">45</div>
                    <div class="forum-thread">893</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-1.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Venom</a></h5>
                            <span>June 20, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-group">
                <div class="forum-row">
                    <div class="forum-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">What's your favorite FPS of 2017</a></h4>
                        <p>by Lobo on April 27, 2017</p>
                    </div>
                    <div class="forum-thread">128</div>
                    <div class="forum-thread">2136</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-3.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Clark</a></h5>
                            <span>May 19, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-group forum-closed">
                <div class="forum-row">
                    <div class="forum-icon">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">Interesting Fantasy Worlds?</a></h4>
                        <p>by Maniac on March 28, 2017</p>
                    </div>
                    <div class="forum-thread">32</div>
                    <div class="forum-thread">88</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-4.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Strange</a></h5>
                            <span>May 10, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-group">
                <div class="forum-row">
                    <div class="forum-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">Battlefield 1 Worth It For Campaign?</a></h4>
                        <p>by Elizabeth on March 22, 2017</p>
                    </div>
                    <div class="forum-thread">15</div>
                    <div class="forum-thread">182</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-1.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Venom</a></h5>
                            <span>April 19, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-group">
                <div class="forum-row">
                    <div class="forum-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">Waiting on a Switch price cut? It could be a while.</a></h4>
                        <p>by Stranger on March 22, 2017</p>
                    </div>
                    <div class="forum-thread">6</div>
                    <div class="forum-thread">658</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-5.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Trevor</a></h5>
                            <span>April 14, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-group">
                <div class="forum-row">
                    <div class="forum-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">Q: Black Friday Xbox Sale</a></h4>
                        <p>by Venom on March 22, 2017</p>
                    </div>
                    <div class="forum-thread">15</div>
                    <div class="forum-thread">182</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-3.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Clark</a></h5>
                            <span>April 19, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-group">
                <div class="forum-row">
                    <div class="forum-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">Hearthstones Newest Expansion</a></h4>
                        <p>by Strange on March 22, 2017</p>
                    </div>
                    <div class="forum-thread">45</div>
                    <div class="forum-thread">86</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-3.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Venom</a></h5>
                            <span>April 19, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-group forum-closed">
                <div class="forum-row">
                    <div class="forum-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">Mass Effect is a promising game</a></h4>
                        <p>by Elizabeth on March 16, 2017</p>
                    </div>
                    <div class="forum-thread">63</div>
                    <div class="forum-thread">237</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-4.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Strange</a></h5>
                            <span>April 10, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-group">
                <div class="forum-row">
                    <div class="forum-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">Uncharted 4: A Thief's End</a></h4>
                        <p>by Clark on Januar 21, 2017</p>
                    </div>
                    <div class="forum-thread">32</div>
                    <div class="forum-thread">130</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-2.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Elizabeth</a></h5>
                            <span>March 20, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-group">
                <div class="forum-row">
                    <div class="forum-icon">
                        <i class="fa fa-comments"></i>
                    </div>
                    <div class="forum-title">
                        <h4><a href="forum-post.html">How's your push up game?</a></h4>
                        <p>by Constantine on Januar 20, 2017</p>
                    </div>
                    <div class="forum-thread">46</div>
                    <div class="forum-thread">89</div>
                    <div class="forum-latest">
                        <a href="profile.html"><img src="img/user/user-5.jpg" alt=""></a>
                        <div>
                            <h5><a href="forum-post.html">Trevor</a></h5>
                            <span>March 10, 2017</span>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="forum-footer">
                <div></div>
                <div>Topic</div>
                <div>Replies</div>
                <div>Views</div>
                <div>Most Recent</div>
            </div> -->
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="separate"><span>...</span></li>
                <li class="page-item"><a class="page-link" href="#">25</a></li>
                <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
            </ul>
        </nav>
    </div>
</section>
<!-- /main -->