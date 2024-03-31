<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <form class="row g-3 justify-content-center"id="role-form-edit" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="col-md-12 p-0">
                                            <label for="_dm-inputFname" class="form-label">Role</label>
                                            <input type="text" class="form-control" id="role-edit" name="role" disabled onclick="roleCheck()">
                                            {{-- <select name="role" id="role" class="form-control" onclick="roleCheck()">
                                                @foreach ($roles as $role)
                                                <option disabled hidden selected>{{ 'Pilih Role' }}</option>
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                @endforeach
                                            </select> --}}
                                            {{-- <input id="nama" type="text" disabled required value="" class="form-control"> --}}
                                        </div>
                
                                        <div class="col-md-12 p-0">
                                            <label for="_dm-inputLname" class="form-label">Permission</label>
                                            <div class="col-12 row p-2">
                                                @foreach ($permissions as $permission)
                                                <div class="form-check col-6">
                                                    <input class="form-check-input permission" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="permission{{ $permission->id }}">
                                                    <label class="form-check-label" for="permission{{ $permission->id }}">
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
                                        <button type="button" onclick="resetForm()" class="btn btn-danger">Reset</button>
                                        <button type="button" id="simpanEdit" class="btn btn-primary">Save changes</button>
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
    function resetForm() {
        
        document.getElementById("role-form-edit").reset();
    }
    function submitForm() {
        
        document.getElementById("role-form-edit").submit();
    }
    let id_permission = "";
    

    $('#simpanEdit').click(function() {
        // let data = $(this).data("data")
        var permission_id = [];
        $('.permission:checked').each(function() {
            permission_id.push($(this).val());
        });
        // permission.forEach(element => {
        //     console.log(element.name);
        // });
        console.log(permission_id);
        
        $.ajax({
            url: '{{ route('role-update', ['id' => ':id']) }}'.replace(':id', id_permission),
            type: 'PUT',
            data: { 
                role_id: id_permission,
                permission_id: permission_id,
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

    $("#table").on("click", "td #btn-edit", function (){
        $(".permission").attr("checked", false);
        let data = $(this).data("data")
        id_permission = data.id;
        $("#role-edit").val(data.name)
        let permission = data.permissions
        
        // $("#permission1").prop("checked", true);

        // permission.forEach(permissions => {
        //     console.log(permissions.id)
        //     $("#permission" + permissions.id).prop("checked", true);
        // });
        permission.forEach(element => {
            $("#permission"+element.id).attr('checked', true);
        });
    })
</script>
