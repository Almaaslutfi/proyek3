<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section id="tambah_akun">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="h-100">
                                <div class="card-body">
                                    <form class="row g-3 justify-content-center" id="form-tambah" method="post" action="{{route('form-tambah')}}">
                                        @csrf
                                        <div class="col-md-6">
                                            <label for="_dm-inputFname" class="form-label">Nama Depan</label>
                                            <input id="_dm-inputFname" type="text" placeholder="Nama Depan" required name="first_name" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="_dm-inputLname" class="form-label">Nama Belakang</label>
                                            <input id="_dm-inputLname" type="text" name="last_name" required placeholder="Nama Belakang" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label for="_dm-inputUname" class="form-label">Username</label>
                                            <input id="_dm-inputUname" type="username" name="username" required class="form-control" placeholder="Username">
                                        </div>
                                        <div class="col-12">
                                            <label for="_dm-inputEmail" class="form-label">Email</label>
                                            <input id="_dm-inputEmail" type="email" name="email" required class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-12">
                                            <label for="_dm-inputPass" class="form-label">Password</label>
                                            <input id="_dm-inputPass" type="password" name="password" required class="form-control" placeholder="*****">
                                        </div>
                                        <div class="col-12">
                                            <label for="_dm-inputConfirmPass" class="form-label">Konfirmasi Password</label>
                                            <input id="_dm-inputConfirmPass" type="password" required name="password_confirmation" class="form-control" placeholder="*****">
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-end p-3">
                                    <div>
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
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
