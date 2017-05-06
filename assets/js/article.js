$(document).ready(function () {
    function saveArticle()
    {
        var formName = $('#newArticleForm');
        var modalWindow = $('#newArticleModal');
    
        $.ajax({
            type: "POST",
            url: formName.attr('action'),
            data: formName.serialize(),
            success: function (response) {
                if(response.result){
                    modalWindow.find('.modal-close').click();
                    renderArticleRow();
                }
            },
            fail: function () {
                alert('Fail');
            },
            dataType: 'json'
        });
    }
    
    function renderArticleRow()
    {
    
    }
    
    $('.modal-save').click(function () {
        saveArticle();
    });
});
