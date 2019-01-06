<?= $this->Element('Page/breadcrumbs') ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<section>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
           
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#forum" aria-controls="forum" role="tab" data-toggle="tab">Forum</a></li>
                    <li class="nav-item"><a class="nav-link" href="#options" aria-controls="options" role="tab" data-toggle="tab">Options</a></li>
                </ul>
                <?= $this->Flash->render() ?>
                <?= $this->Form->create($post,['id'=>'myForm']) ?>
                    <div class="tab-content p-t-20">
                        <div class="tab-pane active" id="forum" role="tabpanel">
                            <!-- form -->                                
                                <div class="form-group">
                                    <label for="title">Topic Title</label>                            
                                    <?= $this->Form->input('PostTitle',['type'=>'text','class'=>'form-control','placeholder'=>'Title','label'=>false]);?> 
                                </div>                              
                                <div class="form-group">
                                    <label for="description">Short Description</label>
                                    <?= $this->Form->input('PostDesc',['type'=>'text','class'=>'form-control','placeholder'=>'Description','label'=>false]);?> 
                                    <small class="form-text">Short Description about your topic content.</small>
                                </div>
                                <div class="form-group">
                                    <label for="thread">Thread</label>
                                    <?php $arrCategory=array('Game Forest'=>'Game Forest','Playstation 4'=>'Playstation 4','Xbox One'=>'Xbox One','Pc'=>'Pc','Steam'=>'Steam','FPS'=>'FPS') ?>
                                    <?=$this->Form->control('PostThread',['id'=>'thread','type'=>'select','class'=>'form-control js-example-basic' ,'label'=>false , 'options'=>$arrCategory, 'default'=>'0'])?>                                
                                </div>                                                 
                                <div class="form-group">
                                    <label for="description">Content</label>
                                    <?= $this->Form->input('PostContent',['id'=>'summernote','type'=>'text','class'=>'form-control','placeholder'=>'Nội dung','label'=>false,'required'=>false]);?> 
                                    <small class="form-text">Others will se when reach your topic (max 50 character).</small>
                                </div>                                         
                        </div>
                        <div class="tab-pane" id="options" role="tabpanel">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label for="date">Publish Date:</label>
                                    <?= $this->Form->input('PostDate',['type'=>'text','class'=>'form-control flatpickr flatpickr-input active','placeholder'=>'Pick a date','label'=>false]);?> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Attachment</label>
                                <div class="row">
                                    <div class="col-8">
                                        <label class="custom-file">
                                        <input type="file" id="file2" class="custom-file-input">
                                        <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Enable Replies</label>
                                <div><input type="checkbox" class="js-switch" checked></div>
                            </div>
                        </div>
                        <div class="m-t-30">
                            <button class="btn btn-primary btn-rounded btn-shadow float-right" type="submit" name="save">Submit</button>
                        </div>  
                    </div>                   
                <?= $this->Form->end(); ?>      
            </div>
        </div>
    </div>
</section>
<!-- /main -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        $('#summernote').summernote({
            height: 200,
            styleTags: ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
            focus:true
        });

        $(document).on('submit','#myForm',function(){
            $("#summernote").val($("#summernote").summernote("code"));
        });

        $(".js-example-basic").select2();
        $(".flatpickr").flatpickr();
        var elem = document.querySelector('.js-switch');
        var init = new Switchery(elem);
    })

    
</script>
