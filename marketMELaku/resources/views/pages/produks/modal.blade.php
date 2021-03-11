<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formStore" action="#" method="POST">
        @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nama Produk : </label>
                <input type="text" id="nama_produk" name="nama_produk" class="form-control">
                <b class="text-danger" id="namaProdukError"></b>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- End Modal --}}