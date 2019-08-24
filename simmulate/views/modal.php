<!--Add Product-->
<div id="modal-add" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Menambah Produk</h3>
      </div>
        <form action="../function/seller.php" class="modal-form" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <fieldset>
                  <label for="pict-product">Gambar Produk :</label>
                  <input id="pict-product" type="file" name="gambar_produk">
                </fieldset>
                <fieldset>
                  <input class="form-control" type="text" name="nama_produk" placeholder="Nama Produk">
                </fieldset>
                <fieldset>
                  <textarea class="form-control" name="deskripsi_produk" placeholder="Deskripsi Produk"></textarea>
                </fieldset>
                <fieldset>
                  <input class="form-control harga" type="text" name="harga_produk" placeholder="etc. Rp.200.000">
                </fieldset>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="send-data-product">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>