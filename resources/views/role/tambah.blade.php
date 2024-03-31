<div class="modal fade" id="ModalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Role Permission</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section id="tambah_akun">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="h-100">
                                <div class="card-body">
                                    <form class="row g-3 justify-content-center"id="role-form-tambah" method="post">
                                        @csrf
                                        <div class="col-md-12 p-0">
                                            <label for="_dm-inputFname" class="form-label">Role</label>
                                            <input type="text" class="form-control" id="role" name="role" placeholder="Nama Role"required>
                                        </div>
                                        <div class="col-md-12 p-0">
                                            <label for="_dm-inputLname" class="form-label">Permission</label>
                                            <div class="col-12 row p-2">
                                                @foreach ($permissions as $permission)
                                                <div class="form-check col-6">
                                                    <input class="form-check-input permission_tambah" type="checkbox" name="permission-tambah[]" value="{{ $permission->id }}" id="permission-tambah{{ $permission->id }}">
                                                    <label class="form-check-label" for="permission-tambah{{ $permission->id }}">
                                                        {{ $permission->name }}
                                                    </label>
                                                </div>
                                                @endforeach
                                            </div>
                                            {{-- <input id="permission" type="text" name="permission" required placeholder="Permission" class="form-control"> --}}
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-end p-3">
                                    <div>
                                        <button type="button" onclick="resetFormTambah()" class="btn btn-danger">Reset</button>
                                        <button type="button" id="simpan" class="btn btn-primary">Save changes</button>
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
    function resetFormTambah() {
        
        document.getElementById("role-form-tambah").reset();
    }
    function submitFormTambah() {
        
        document.getElementById("role-form-tambah").submit();
    }
    // let id_permission = "";
    

    $('#simpan').click(function() {
        // let data = $(this).data("data")
        var permission_id_tambah = [];
        let id_permission = $('.permission_tambah:checked').map(function() {
            return $(this).val();
        }).toArray();
        // $('.permission:checked').each(function() {
        //     permission_id_tambah.push($(this).val());
        // });
        // permission.forEach(element => {
        //     console.log(element.name);
        // });
        console.log(id_permission);
        
        $.ajax({
            url: '{{ route('role-tambah') }}',
            type: 'POST',
            data: { 
                role: $("#role").val(),
                permission_id: id_permission,
                _token: "{{ csrf_token() }}" 
            },                
            success: function(response) {
                console.log(response);
                location.reload();
                // Menghandle kesuksesan
            },
            error: function(xhr, status, error) {
                console.error(error);
                // Menghandle error
            }
        });
    });

    $("#tambah-role").on("click", function (){
        $(".permission_tambah").attr("checked", false);
        // let data = $(this).data("data")
        // id_permission = data.id;
        // $("#role-form").attr("action", "{{route('role-update',  ':data' )}}".replace(':data', data.id))
        // $("#role").val(data.name)
        // let permission = data.permissions;
        // console.log(permission);
        

        
        // permission.forEach(element => {
        //     $("#permission"+element.id).attr("checked", true);
        // });
    })
</script>
