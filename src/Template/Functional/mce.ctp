<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MCE | Functional</title>
    
    <?= $this->Html->script('/plugins/jquery/jquery-3.2.1.min') ?>
    <?= $this->Html->script('/plugins/tinymce/tinymce.min.js') ?>
</head>
<body>
    <style>
        .mce-wrap{
            width: 900px;
            margin: 0 auto;
            margin-top: 200px;
        }
    </style>
    <div class="mce-wrap">
        <form method="post" action="/editor_content_save">
            <textarea id="mce" rows="10" cols="80" style="display:none">
                
            </textarea>
        </form>
    </div>
<script>
    let current_url = window.location.pathname + window.location.search;
    $(function() {
        // $.ajax({
        //     url: '<?= $this->Url->build(['controller' => 'Pages', 'action' => 'loadEditorSave']) ?>',
        //     data: {url:current_url, user_id: 1},
        //     type: 'post',
        //     success: function(res){
        //         let content = (res.code == 200)? res.data.content : '';
        //         InitMCE(content);             
        //     }
        // });  

        InitMCE();         
    });  

    function InitMCE(content){
        tinymce.init({ 
            selector:'#mce',
            setup: function(editor) {
                editor.on('init', function(e) {
                    //editor.execCommand('mceFullScreen');
                });
            },
            init_instance_callback: function(editor){
                editor.execCommand('insertHTML', false, content);                       
            },
            branding: false,
            toolbar: [
                "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify anchor | forecolor backcolor |bullist numlist outdent indent | link image | visualchars searchreplace" ,
                "productpreview code | responsivefilemanager media emoticons help save"
            ],
            plugins : [
                "advlist anchor autolink autoresize code link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars fullscreen insertdatetime media nonbreaking bbcode codesample",
                "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager preview",
                "colorpicker help imagetools textcolor productpreview"
            ],
            save_onsavecallback: function (e) { 
                // $.ajax({
                //     url: '<?= $this->Url->build(['controller' => 'Pages', 'action' => 'saveEditorContent']) ?>',
                //     data: {url:current_url, user_id: 1, content: tinymce.activeEditor.getContent({format: 'raw'})},
                //     type: 'post',
                //     success: function(res){
                //         console.log(res);          
                //     }
                // }); 
            },
            external_filemanager_path:"/filemanager/",
            filemanager_title:"File Manager" ,
            external_plugins: { "filemanager" : "plugins/filemanager/plugin.min.js"}
        }); 
        $('#mce').show();
    } 
</script>
</body>
</html>