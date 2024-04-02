<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Permission</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section id="tambah_akun">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="h-100">
                                <div class="card-body">
                                    <form class="row g-3 justify-content-center" id="form-tambah" method="post" action="{{route('permission-tambah')}}">
                                        @csrf
                                        <div class="col-md-12">
                                            <label for="_dm-inputFname" class="form-label">Pilih Role</label>
                                            <select name="" class="form-control" id="">
                                            @foreach ($roles as $role)
                                                <option selected hidden disabled>Pilih Role</option>
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="_dm-inputFname" class="form-label">Pilih Permission</label>
                                            <input id="_dm-inputFname" type="text" placeholder="Nama" required name="nama" class="form-control">
                                        </div>
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