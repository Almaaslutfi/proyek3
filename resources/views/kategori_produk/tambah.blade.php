<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section id="tambah_akun">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="h-100">
                                <div class="card-body">
                                    <form class="row g-3 justify-content-center" id="form-tambah" method="post" action="{{route('kategori-tambah')}}">
                                        @csrf
                                        <div class="col-md-12">
                                            <label for="_dm-inputFname" class="form-label">Kode Kategori</label>
                                            <input id="_dm-inputFname" type="text" value="{{ $kode }}" name="kode_kategori" required class="form-control" disabled>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="_dm-inputLname" class="form-label">Nama</label>
                                            <input id="_dm-inputLname" type="text" name="nama" required placeholder="Nama" class="form-control">
                                        </div>
                                        {{-- <div class="col-12">
                                            <label for="_dm-inputUname" class="form-label">Status</label>
                                            <input id="_dm-inputUname" type="text" name="status" required class="form-control" placeholder="Status">
                                        </div> --}}
                                    </form>
                                </div>
                                <div class="d-flex justify-content-end p-3">
                                    <div>
                                        <button type="reset" onclick="reset_tambah()" class="btn btn-danger">Reset</button>
                                        <button type="submit" onclick="submit_tambah()" class="btn btn-primary">Tambah</button>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<script>
    function submit_tambah() {
        document.getElementById("form-tambah").submit();
    }
</script>
