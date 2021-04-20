<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pelanggan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formModal" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
              <label for="">Nama Lengkap : </label>
              <input type="text" id="nama" autocomplete="off" required name="nama" class="form-control">
              <span class="text-danger"><b id="nama_error"></b></span>
          </div>
          <div class="form-group">
              <label for="">Alamat : </label>
              <input type="text" id="alamat" autocomplete="off" required name="alamat" class="form-control">              
              <span class="text-danger"><b id="alamat_error"></b></span>
          </div>
          <div class="form-group">
              <label for="">Nomor Telepon : </label>
              <input type="number" id="no_telp" autocomplete="off" required name="no_telp" class="form-control">
              <span class="text-danger"><b id="no_telp_error"></b></span>
          </div>
          <div class="form-group">
              <label for="">Email : </label>
              <input type="email" id="email" autocomplete="off" required name="email" class="form-control">
              <span class="text-danger"><b id="email_error"></b></span>
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
          <h5>Apakah Anda Yakin Menghapus Pelanggan : <span id="namaPelanggan"></span>?</h5>
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