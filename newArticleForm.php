<div class="modal fade" id="newArticleModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                </button>
                <h4 class="modal-title" id="myModalLabel">New Article</h4>
            </div>
            <div class="modal-body">
                <form id="newArticleForm" action="handler.php">
                    <div class="form-group">
                        <label for="article[title]">Title</label>
                        <input type="text" class="form-control" name="article[title]"
                               placeholder="Type article title">
                    </div>
                    <div class="form-group">
                        <label for="article[content]">Content</label>
                        <textarea class="form-control" rows="8" name="article[content]"
                                  placeholder="Text Area"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default modal-close" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary modal-save">Save changes</button>
            </div>
        </div>
    </div>
</div>
