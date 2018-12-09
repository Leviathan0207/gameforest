<?= $this->Element('Page/breadcrumbs')?>
<style>
    pre{
        background-color: #ececec;
        border-radius: 3px;
        font-size: 85%;
        line-height: 1.45;
        overflow: auto;
        padding: 16px;
    }
</style>
<section>
    <div class="container">
        <div class="row release-entry" id="re-1">
            <div class="col-md-2 first-col">
                <p><span class="badge badge-outline-warning">Warning</span></p>
                <p><i class="pli-tag"></i> 18.12.1-RC</p>
                <p class="release-patch">#8.23</p>
            </div>
            <div class="col-md-10 second-col">
                <div class="release-caption">New version 3.7.0-RC3 released</div>
                <div class="release-date">released this 6 days ago · 11 commits to master since this release</div>
                <div class="release-notes mt-md-4">
                    <?= $release_content ?>
                </div>
            </div>
        </div>
        <div class="row release-entry" id="re-2">
            <div class="col-md-2 first-col">
                <p><span class="badge badge-outline-success">Warning</span></p>
                <p><i class="pli-tag"></i> 18.12.1-RC</p>
                <p class="release-patch">#8.23</p>
            </div>
            <div class="col-md-10 second-col">
                <div class="release-caption">New version 3.7.0-RC3 released</div>
                <div class="release-date">released this 6 days ago · 11 commits to master since this release</div>
                <div class="release-notes mt-md-4">
                    <?= $release_content ?>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        
    })
</script>




