<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formModal" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
              <label for="">Produk : </label>
              <select name="produks_id" id="produks_id" class="form-control">
                <option value="">Pilih Produk</option>
                @foreach(App\Models\Produk::all() as $key => $value)
                <option value="{{ $value->id }}">{{ $value->nama_produk }}</option>
                @endforeach
              </select>
              <span class="text-danger"><b id="produk_error"></b></span>
          </div>
          <div class="form-group">
              <label for="">Nama Barang : </label>
              <input type="text" id="nama_barang" autocomplete="off" required name="nama_barang" class="form-control">
              <span class="text-danger"><b id="nama_barang_error"></b></span>
          </div>
          <div class="form-group">
              <label for="">Satuan : </label>
              <select name="satuan" id="satuan" class="form-control">
                <option value="">Pilih Satuan</option>
                <option value="item">ITEM</option>
                <option value="pcs">PCS</option>
                <option value="kardus">KARDUS</option>
              </select>
              <span class="text-danger"><b id="satuan"></b></span>
          </div>
          <div class="form-group">
              <label for="">Harga Jual : </label>
              <input type="number" id="harga_jual" autocomplete="off" required name="harga_jual" class="form-control">
              <span class="text-danger"><b id="harga_jual_error"></b></span>
          </div>
          <div class="form-group">
              <label for="">Stok : </label>
              <input type="number" id="stok" autocomplete="off" required name="stok" class="form-control">
              <span class="text-danger"><b id="stok_error"></b></span>
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
          <h5>Apakah Anda Yakin Menghapus Barang : <span id="namaBarang"></span>?</h5>
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