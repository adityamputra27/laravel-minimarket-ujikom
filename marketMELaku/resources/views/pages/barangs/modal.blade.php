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
      <form action="{{ route('barangs.store') }}" id="formModal" method="POST">
        @csrf
        <div id="method"></div>
        <div class="modal-body">
          <div class="form-group">
              <label for="">Produk : </label>
              <select name="produks_id" id="produks_id" class="form-control">
                <option value="">Pilih Produk</option>
                @foreach(App\Models\Produk::all() as $key => $value)
                <option value="{{ $value->id }}">{{ $value->nama_produk }}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
              <input type="hidden" name="id" id="id">
              <label for="">Nama Barang : </label>
              <input type="text" id="nama_barang" required name="nama_barang" class="form-control">
          </div>
          <div class="form-group">
              <label for="">Satuan : </label>
              <select name="satuan" id="satuan" class="form-control">
                <option value="">Pilih Satuan</option>
                <option value="item">ITEM</option>
                <option value="pcs">PCS</option>
                <option value="kardus">KARDUS</option>
              </select>
          </div>
          <div class="form-group">
              <label for="">Harga : </label>
              <input type="number" id="harga_jual" required name="harga_jual" class="form-control">
          </div>
          <div class="form-group">
              <label for="">Stok : </label>
              <input type="text" id="stok" required name="stok" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-success">Simpan</button>
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