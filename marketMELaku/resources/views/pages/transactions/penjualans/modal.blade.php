<!-- Modal -->
<div class="modal fade" id="modalPelanggan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Data Pelanggan</h3>
      </div>
      <div class="modal-body">
            <table id="datatable" class="table table-hovered table-bordered">
              <thead class="bg-primary">
                <tr>
                  <th>No</th>
                  <th>Kode Pelanggan</th>
                  <th>Nama Lengkap</th>
                  <th>Alamat Lengkap</th>
                  <th>No. Telepon</th>
                  <th>Email</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody class="bg-secondary">
              @foreach ($pelanggan as $key => $value)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->kode_pelanggan }}</td>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->alamat }}</td>
                <td>{{ $value->no_telp }}</td>
                <td>{{ $value->email }}</td>
                <td>
                  <input type="hidden" name="pelanggans_id" class="pelangganId" value="{{ $value->id }}">
                  <button class="btn btn-success" id="pilihPelanggan"><i class="fa fa-check-circle"></i> Pilih</button>
                </td>
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
                <th>Nama Barang</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>&nbsp;</th>
              </tr>
            </thead>
            <tbody class="bg-secondary">
            @foreach ($barang as $key => $value)
            <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $value->kode_barang }}</td>
              <td>{{ $value->nama_barang }}</td>
              <td>{{ $value->harga_jual }}</td>
              <td class="bg-{{ $value->stok > 100 ? 'success' : 'danger' }}">{{ $value->stok }}</td>
              <td>
                <input type="hidden" name="barangs_id" class="barangId" value="{{ $value->id }}">
                <button class="btn btn-success" id="pilihBarang"><i class="fa fa-check-circle"></i> Pilih</button>
              </td>
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