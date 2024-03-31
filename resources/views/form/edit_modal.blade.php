<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section id="tambah_akun">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="h-100">
                                <div class="card-body">
                                    <form class="row g-3 justify-content-center"id="edit-form" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="col-md-12 justify-content-center d-flex">
                                            <div class="row col-md-6">
                                                <img type="image/*" src="{{url('assets/img/profile-photos/1.png')}}" alt="foto" id="foto" class="rounded-circle" style="max-width: none">
                                             {{-- <button type="button" class="btn btn-primary my-3" id="foto">Ubah Foto</button> --}}
                                                <div id="input-img" class="text-break"></div>
                                                <label for="formFile" class="btn btn-primary my-3">Ubah Foto</label>
                                                <input class="d-none" type="file" id="formFile">
                                                {{-- <label for="tb-file-upload" class="btn btn-primary my-3">Upload Image</label>
                                                <input type="file" id="tb-file-upload" class="d-none" accept="image/*" onchange="fileUpload(event);" /> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="_dm-inputFname" class="form-label">Nama Depan</label>
                                            <input id="first_name" type="text" placeholder="Nama Depan" required name="first_name" class="form-control">
                                        </div>
                
                                        <div class="col-md-6">
                                            <label for="_dm-inputLname" class="form-label">Nama Belakang</label>
                                            <input id="last_name" type="text" name="last_name" required placeholder="Nama Belakang" class="form-control">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="role" class="form-label">Role</label>
                                            <select name="role" id="role" class="form-control">
                                                @foreach ($roles as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                            {{-- <input id="role" type="text" name="role" required placeholder="Nama Belakang" class="form-control"> --}}
                                        </div>
                
                                        <div class="col-12">
                                            <label for="_dm-inputUname" class="form-label">Username</label>
                                            <input id="username" type="username" name="username" required class="form-control" placeholder="Username">
                                        </div>
                
                                        <div class="col-12">
                                            <label for="_dm-inputEmail" class="form-label">Email</label>
                                            <input id="email" type="email" name="email" required class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-12">
                                            <label for="_dm-inputPass" class="form-label">Password</label>
                                            <input id="_dm-inputPass" type="password" name="password" required class="form-control" placeholder="*****">
                                        </div>
                                        <div class="col-12">
                                            <label for="_dm-inputConfirmPass" class="form-label">Konfirmasi Password</label>
                                            <input id="_dm-inputConfirmPass" type="password" required name="password_confirmation" class="form-control" placeholder="">
                                        </div>
                                    </form>          
                                </div>
                                <div class="d-flex justify-content-end p-3">
                                    <div>
                                        <button type="button" onclick="resetForm()" class="btn btn-danger">Reset</button>
                                        <button type="submit" onclick="submitForm()" class="btn btn-primary">Save changes</button>
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
    // const fileUpload = (event) => {
    //     const files = event.target.files;
    //     const filesLength = files.length;
    //     if (filesLength > 0) {
    //         const imageSrc = URL.createObjectURL(files[0]);
    //         const imagePreviewElement = document.querySelector("#tb-image");
    //         imagePreviewElement.src = imageSrc;
    //         imagePreviewElement.style.display = "block";
    //     }
    // };
    formFile.onchange = evt => {
        const [file] = formFile.files
        if (file) {
            foto.src = URL.createObjectURL(file)
            console.log(file);
            $("#input-img").text(file.name)
        }
    }
    function resetForm() {
        document.getElementById("edit-form").reset();
    }
    function submitForm() {
        
        document.getElementById("edit-form").submit();
    }
    $("#table").on("click", "td #btn-edit", function (){
        
        let data = $(this).data("data")
        $("#edit-form").attr("action", "{{url('form-update')}}" + "/" + data.id)
        $("#first_name").val(data.first_name)
        $("#last_name").val(data.last_name)
        $("#username").val(data.username)
        $("#email").val(data.email)

        if(data.roles[0] != null){
            let x = data.roles[0].id
            $('select option[value="'+ x +'"]').attr("selected",true);
            // console.log(data.roles[0].id);
        }
        // var x = $("select #role").val(data.roles[0].name)
        // console.log(data.roles[0].name);
        // var x = $("select #role").val(data.roles[0].name).filter(":selected").text();
    })
</script>
