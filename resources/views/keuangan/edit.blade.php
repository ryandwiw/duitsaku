<div class="modal fade" id="editModal{{ $keuangan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel{{ $keuangan->id }}">Edit Transaksi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('keuangan.update', $keuangan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" name="judul" class="form-control" value="{{ $keuangan->judul }}" required>
                </div>
                <div class="form-group">
                    <label for="icon">Icon:</label>
                    <input type="text" name="icon" class="form-control" value="{{ $keuangan->icon }}" required>
                </div>
                <div class="form-group">
                    <label for="nominal">Nominal:</label>
                    <input type="text" name="nominal" class="form-control" value="{{ $keuangan->nominal }}" required>
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis:</label>
                    <select name="jenis" class="form-control" required>
                        <option value="pemasukan" {{ $keuangan->jenis == 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                        <option value="pengeluaran" {{ $keuangan->jenis == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
            </form>
        </div>
      </div>
    </div>
  </div>
