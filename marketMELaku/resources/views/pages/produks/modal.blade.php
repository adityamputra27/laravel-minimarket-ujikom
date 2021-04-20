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
      <form id="formModal" method="POST">
        @csrf 
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nama Produk : </label>
                <input type="text" autocomplete="off" id="nama_produk" required name="nama_produk" class="form-control">
                <span class="text-danger"><b id="nama_produk_error"></b></span>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="closeForm" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" id="submitForm" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal -->
<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="formDelete" method="POST">
          @csrf
          @method('DELETE')
          <input type="hidden" name="id" id="idDelete">
          <h5>Apakah Anda Yakin Menghapus Produk : <span id="namaProduk"></span>?</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-success">Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal