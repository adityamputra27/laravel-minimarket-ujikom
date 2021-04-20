<!-- Modal -->
<div class="modal fade" id="modalBarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Data Barang</h3>
      </div>
      <div class="modal-body">
            <table id="datatable" class="table table-hovered table-bordered">
              <thead class="bg-primary">
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Produk</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Harga Jual</th>
                  <th>Stok</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($barang as $key => $value)
                <tr id="parentBarang">
                  <td>{{ $no++ }}</td>
                  <td class="kodeBarang">{{ $value->kode_barang }}</td>
                  <td class="namaProduk">{{ $value->getProduks->nama_produk }}</td>
                  <td class="namaBarang">{{ $value->nama_barang }}</td>
                  <td class="satuanBarang">{{ Str::upper($value->satuan) }}</td>
                  <td class="hargaJual" data-harga-jual="{{ $value->harga_jual }}">{{$value->harga_jual }}</td>
                  <td class="stokBarang bg-{{ $value->stok <= 100 ? 'danger' : 'success' }}">{{ $value->stok }}</td>
                  <td><button type="button" id="pilihBarang" class="btn btn-success"><i class="fa fa-check-circle"></i> Pilih</button></td>
                  <input type="hidden" class="barangId" value="{{ $value->id }}">
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
        </div>
    </div>
  </div>
</div>
<!-- End Modal -->