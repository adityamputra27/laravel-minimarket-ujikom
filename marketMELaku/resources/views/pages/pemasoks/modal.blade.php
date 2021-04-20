<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formModal" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
              <label for="">Nama Supplier : </label>
              <input type="text" id="nama_pemasok" autocomplete="off" required name="nama_pemasok" class="form-control">
              <span class="text-danger"><b id="nama_pemasok_error"></b></span>
          </div>
          <div class="form-group">
              <label for="">Alamat : </label>
              <input type="text" id="alamat" autocomplete="off" required name="alamat" class="form-control">              
              <span class="text-danger"><b id="alamat_error"></b></span>
          </div>
          <div class="form-group">
              <label for="">Kota : </label>
              <select name="kota" id="kota" class="form-control" style="width: 100%;">
                  <option value="">Pilih Kabupaten/Kota</option>
                  @foreach ($kota as $key => $value)
                  <option value="{{ $value->kota }}">{{ $key+1 }}. {{ $value->kota }}</option>
                  @endforeach
              </select>
              <span class="text-danger"><b id="kota_error"></b></span>
          </div>
          <div class="form-group">
              <label for="">Nomor Telepon : </label>
              <input type="number" id="no_telp" autocomplete="off" required name="no_telp" class="form-control">
              <span class="text-danger"><b id="no_telp_error"></b></span>
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
          <h5>Apakah Anda Yakin Menghapus Supplier : <span id="namaPemasok"></span>?</h5>
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