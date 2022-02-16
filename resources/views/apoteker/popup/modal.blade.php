<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Apoteker</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="{{route('input.apoteker')}}" method="POST">
        @csrf
            <div class="form-group">
                <label for="inputName">Kode Apoteker</label>
                <input type="text" name="kode_apoteker" class="form-control" id="inputName" placeholder="Masukan Kode Apoteker"/ required>
            </div>
           <div class="form-group">
                <label for="inputName">Nama Apoteker</label>
                <input type="text" name="nama_apoteker" class="form-control" id="inputName" placeholder="Masukan Nama Apoteker"/ required>
            </div>
            <div class="form-group">
                <label for="inputName">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="date" required>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--end of modal-->