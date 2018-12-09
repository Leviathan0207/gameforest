$(function(){
    var poolTag = [];
    $(document).on("click", ".post-tags a", function(e){
        e.preventDefault();

        if (!$(this).hasClass('tag-selected')) {
            poolTag.push($(this).html());
        }

        var tag_string = '';
        $.each(poolTag, function(index, data){
            tag_string += (data.replace('#','') + ',');
        });
        location.replace("/tag/?t=" + tag_string.substring(0, tag_string.length - 1));
    });

    $(document).on("contextmenu", ".post-tags a", function(e) {
        e.preventDefault();

        if ($(this).hasClass('tag-selected')) {
            $(this).removeClass("tag-selected");
            poolTag.splice(poolTag.indexOf($(this).html()), 1);
        } else {
            $(this).addClass("tag-selected");
            poolTag.push($(this).html());
        };
    });
})