



<div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="hapusModalLabel">Apakah Anda Yakin ini Dihapus ?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h4>Hal ini akan menghilangkan Catatan Keuangan Anda</h4>
            <form action="{{ route('keuangan.destroy', $keuangan->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-danger" id="deleteButton">Hapus</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
  