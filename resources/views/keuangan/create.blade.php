<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tambahModalLabel">Tambah Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('keuangan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="icon">Icon:</label>
                    <input type="text" name="icon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal:</label>
                    <input type="text" name="nominal" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis:</label>
                    <select name="jenis" class="form-control" required>
                        <option value="pemasukan">Pemasukan</option>
                        <option value="pengeluaran">Pengeluaran</option>
                    </select>
                </div>
                {{-- <button type="submit" class="btn btn-primary">Simpan</button> --}}
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" id="simpanButton">Simpan</button>
                  </div>
            </form>
            
        </div>

      </div>
    </div>
  </div>