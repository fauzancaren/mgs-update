<div class="modal fade" id="modal-action" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl  modal-dialog-centered">
        <div class="modal-content needs-validation" >
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Karyawan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="InfoId" name="InfoId" class="form-control form-control-sm d-none" value="" > 
                <div class="row">
                    <div class="col-lg-4 col-12 my-1">
                        <div class="text-center">
                            <label class="cabinet p-auto">
                                <input type="file" class="form-control item-img file d-none" id="MsEmpImageFile" name="MsEmpImageFile" accept="image/*">
                                <figure>
                                    <img src="<?= $MsEmpImage ?>"  class="img-circular m-auto" id="MsEmpImage" name="MsEmpImage" width="150" height="150"/>
                                    <figcaption class="text-center"><i class="fas fa-camera"></i>&nbsp; Change</figcaption>
                                </figure>
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 my-1">
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpIsActive" class="col-sm-3 col-form-label">Status<sup class="error">&nbsp;*</sup></label>
                            <div class="col-sm-9">
                                <div class="form-check form-switch">
                                    <input id="MsEmpIsActive" name="MsEmpIsActive" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpCode" class="col-sm-3 col-form-label">Kode<sup class="error">&nbsp;*</sup></label>
                            <div class="col-sm-9">
                                <input id="MsEmpCode" name="MsEmpCode" type="text" class="form-control form-control-sm" value="<?= $MsEmpCode ?>" readonly>
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpPositionName" class="col-sm-3 col-form-label">Nama<sup class="error">&nbsp;*</sup></label>
                            <div class="col-sm-9">
                                <input id="MsEmpName" name="MsEmpName" type="text" class="form-control form-control-sm" value="">
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-7 col-12 my-1">
                        <div class="row mb-1 align-items-center pt-4">
                            <div class="label-border-right">
                                <span class="label-dialog">Personal</span>
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpNip" class="col-sm-3 col-form-label">NIP/NIK</label>
                            <div class="col-sm-9">
                                <input id="MsEmpNip" name="MsEmpNip" type="text" class="form-control form-control-sm" value="">
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpBirthPlace" class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-4 pe-sm-0">
                                <input id="MsEmpBirthPlace" name="MsEmpBirthPlace" type="text" class="form-control form-control-sm" value="">
                            </div>
                            <label for="MsEmpBirthDate" class="col-sm-2 col-form-label ">Tgl Lahir</label>
                            <div class="col-sm-3 ps-sm-0">
                                <input id="MsEmpBirthDate" name="MsEmpBirthDate" type="text" class="form-control form-control-sm" value="">
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpGender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="MsEmpGender" id="MsEmpGender1" value="M" Checked>
                                    <label class="col-form-label" for="MsEmpGender1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="MsEmpGender" id="MsEmpGender2" value="F">
                                    <label class="col-form-label" for="MsEmpGender2">Perempuan</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpWhatsapp" class="col-sm-3 col-form-label">No. Whatsap</label>
                            <div class="col-sm-9">
                                <input id="MsEmpWhatsapp" name="MsEmpWhatsapp" type="text" class="form-control form-control-sm input-phone" value="">
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpTlp" class="col-sm-3 col-form-label">No. Telp</label>
                            <div class="col-sm-9">
                                <input id="MsEmpTlp" name="MsEmpTlp" type="text" class="form-control form-control-sm number-hp" value="">
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpEmail" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input id="MsEmpEmail" name="MsEmpEmail" type="email" class="form-control form-control-sm" value="">
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpAddress" class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea id="MsEmpAddress" name="MsEmpAddress" class="form-control form-control-sm"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12 my-1">
                        <div class="row mb-1 align-items-center  pt-4">
                            <div class="label-border-right">
                                <span class="label-dialog">Perusahaan</span>
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpStartWork" class="col-sm-3 col-form-label">Mulai Bekerja</label>
                            <div class="col-sm-9">
                                <input id="MsEmpStartWork" name="MsEmpStartWork" type="text" class="form-control form-control-sm" value="">
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center d-none">
                            <label for="MsEmpPositionId" class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select class="form-select form-control-sm" id="MsEmpPositionId" name="MsEmpPositionId" style="width: 100%">
                                    ';
                                    foreach ($data_jabatan as $key) {
                                        echo '<option value="' . $key->MsEmpPositionId . '">' . $key->MsEmpPositionCode . ' - ' . $key->MsEmpPositionName . '</option>';
                                    }
                                    echo '
                                </select>
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center ">
                            <label for="MsWorkplaceId" class="col-sm-3 col-form-label">Toko</label>
                            <div class="col-sm-9">
                                <select class="form-select form-select-sm" id="MsWorkplaceId" name="MsWorkplaceId" style="width: 100%"> 
                                    <?php 
                                        foreach ($TblMsWorkplace as $key) {
                                            echo '<option value="' . $key->MsWorkplaceId . '">' . $key->MsWorkplaceCode . ' - ' . $key->MsWorkplaceName . '</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center  d-none">
                            <label for="MsEmpMode" class="col-sm-3 col-form-label">Akses</label>
                            <div class="col-sm-9">
                                <select class="form-select form-select-sm" id="MsEmpMode" name="MsEmpMode" style="width: 100%">
                                    ';
                                    foreach ($data_akses as $key) {
                                        echo '<option value="' . $key->MenuListingName . '" selected>' . $key->MenuListingName .   '</option>';
                                    }
                                    echo '
                                </select>
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center  pt-4">
                            <div class="label-border-right">
                                <span class="label-dialog">Akun Bank</span>
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpBank" class="col-sm-3 col-form-label">Bank</label>
                            <div class="col-sm-9">
                                <input id="MsEmpBank" name="MsEmpBank" type="text" class="form-control form-control-sm" value="">
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpRekNo" class="col-sm-3 col-form-label">Rekening</label>
                            <div class="col-sm-9">
                                <input id="MsEmpRekNo" name="MsEmpRekNo" type="text" class="form-control form-control-sm" value="">
                            </div>
                        </div>
                        <div class="row mb-1 align-items-center">
                            <label for="MsEmpRekName" class="col-sm-3 col-form-label">A/N</label>
                            <div class="col-sm-9">
                                <input id="MsEmpRekName" name="MsEmpRekName" type="text" class="form-control form-control-sm" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="btn-submit">Simpan</button>
            </div>
        </div>
    </div>
</div> 

<div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div id="upload-demo" class="center-block m-auto"></div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default float-start" data-bs-dismiss="modal">Close</button>
                <button type="button" id="cropImageBtn" class="btn btn-primary float-end">Crop</button>
            </div>
        </div>
    </div>
</div>
	
<script>  
    var cleave = new Cleave('#MsEmpWhatsapp', {
        prefix: '62',
        phone: true,
        phoneRegionCode: 'ID'
    });
    $('.number-hp').toArray().forEach(function(field){
        new Cleave(field, {
            phone: true,
            phoneRegionCode: 'ID'
        });
    }); 
      // --------------------------------------------      SETUP COMBO AND DATE
    var MsPosition = $("#MsEmpPositionId").select2({
        dropdownParent: $("#modal-action .modal-content")
    }); 
    var MsWorkplace = $("#MsWorkplaceId").select2({
        dropdownParent: $("#modal-action .modal-content")
    }); 
    
    //MsWorkplace.val(3);
    //MsWorkplace.trigger("change");

    var dtstartBirthDate = moment();
    var dtstartStartWork = moment();                
    $("#MsEmpBirthDate").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        startDate: dtstartBirthDate,
        locale: {
            format: "DD/MM/YYYY"
        }
    },txt_date);
    txt_date(dtstartBirthDate);
    function txt_date(start) {
        $("#MsEmpBirthDate").html(start.format("DD/MM/YYYY"));
        //send function to window
        dtstartBirthDate = start;
        var vDate = {
                strDate : function() {
                    return start.format("YYYY-MM-DD");
            }
        };
        
        window.MsEmpBirthDate = vDate;
    }

    $("#MsEmpStartWork").daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        startDate: dtstartStartWork,
        locale: {
            format: "DD/MM/YYYY"
        }
    },txt_date);
    txt_date(dtstartStartWork);
    function txt_date(start) {
        $("#MsEmpStartWork").html(start.format("DD/MM/YYYY"));
        dtstartStartWork = start;
        //send function to window
        var vDate = {
                strDate : function() {
                    return start.format("YYYY-MM-DD");
            }
        };
        window.MsEmpStartWork = vDate;
    }    
    // --------------------------------------------      END COMBO AND DATE


    // --------------------------------------------      Start upload preview image
    //$("#MsEmpImage").attr("src", "https://user.gadjian.com/static/images/personnel_boy.png");
    var $uploadCrop,
    tempFilename,
    rawImg,
    imageId;
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#upload-demo").addClass("ready");
                $("#cropImagePop").modal("show");
                rawImg = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
        else {
            swal.fire("Sorry - you\'re browser doesn\'t support the FileReader API");
        }
    }

    $uploadCrop = $("#upload-demo").croppie({
        viewport: {
            width: 150,
            height: 150,
            type: "circle"
        },
        enforceBoundary: false,
        enableExif: true
    });
    $("#cropImagePop").on("shown.bs.modal", function(){
        // alert("Shown pop");
        $uploadCrop.croppie("bind", {
            url: rawImg
        }).then(function(){
            console.log("jQuery bind complete");
        });
    });

    $("#MsEmpImageFile").on("change", function () {
        imageId = $(this).data("id"); 
        tempFilename = $(this).val();
        $("#cancelCropBtn").data("id", imageId); 
        readFile(this); 
    });
    $("#cropImageBtn").on("click", function (ev) {
        $uploadCrop.croppie("result", {
            circle: false, 
            type: "base64",
            format: "png",
            size: {width: 150, height: 150}
        }).then(function (resp) {
            $("#MsEmpImage").attr("src", resp);
            $("#cropImagePop").modal("hide");
        });
    });
    // --------------------------------------------      End upload preview image


    var req_status_add = 0; 

    $("#btn-submit").click(function(){ 
        //validasi
        if($("#MsEmpCode").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan Kode terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#MsEmpName").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan nama terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#MsEmpNip").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan Email terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#MsEmpBirthPlace").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan Alamat terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#MsEmpBirthDate").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan ID Mesin terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if($("#MsEmpGender").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if($("#MsEmpWhatsapp").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if($("#MsEmpTlp").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if($("#MsEmpEmail").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if($("#MsEmpAddress").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if($("#MsEmpAddress").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if($("#MsEmpStartWork").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if($("#MsWorkplaceId").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu", 
            });
            return false
        } 
        if($("#MsEmpBank").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu", 
            });
            return false
        } 
        if($("#MsEmpRekNo").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu", 
            });
            return false
        } 
        if($("#MsEmpRekName").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu", 
            });
            return false
        } 

        $.ajax({
            method: "POST",
            dataType: "json",
            url: "<?= base_url("admin/toko/add") ?>",
            data: {
                "MsWorkplaceCode": $("#MsWorkplaceCode").val(),
                "MsWorkplaceName": $("#MsWorkplaceName").val(),
                "MsWorkplaceAddress": $("#MsWorkplaceAddress").val(),
                "MsWorkplaceEmail":$("#MsWorkplaceEmail").val(),
                "MsWorkplaceTelp1":$("#MsWorkplaceTelp1").val().replaceAll(" ", ""), 
                "MsWorkplaceTelp2":$("#MsWorkplaceTelp2").val().replaceAll(" ", ""),
                "MsWorkplaceLat":$("#MsWorkplaceLat").val(),
                "MsWorkplaceLng":$("#MsWorkplaceLng").val(),
                "MsWorkplaceMap":$("#MsWorkplaceMap").html(),  
            },
            success: function(data) { 
                if(data["status"] == "true"){
                    Swal.fire({
                        icon: 'success',
                        text: 'Tambah data berhasil',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        timer: 1500,
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            load_data_table();
                        }
                    });
                }else{
                    Swal.fire({
                        icon: 'error',
                        text: 'Tambah data gagal',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        timer: 1500
                    });
                } 
            }
        }); 
        
    });
 
 
</script>
 
