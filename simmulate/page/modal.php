<div id="LoginModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sign in</h4>
            </div>
            <div class="modal-body">
                    <form class="" action="function/users.php" method="post">
                        <input type="text" name="username" placeholder="username" class="form-control">
                        <input type="password" name="password" placeholder="password" class="form-control">
                        <span class="notifikasi" ><?= $notifikasi ?></span>
                </div>
                <div class="modal-footer">
                        <button type="submit" name="send-data-user" class="btn btn-default">send</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </form>
                </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->