<div class="modal fade" id="modal-action" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content needs-validation" >
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Show Data Toko</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="InfoId" name="InfoId" class="form-control form-control-sm d-none" value="" > 
                <div class=" row mb-1">
                    <label for="MsWorkplaceCode" class="col-sm-4 col-form-label">Kode<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceCode" name="MsWorkplaceCode" class="form-control form-control-sm" value="<?= $toko["MsWorkplaceCode"]?>" readonly> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="MsWorkplaceName" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceName" name="MsWorkplaceName" class="form-control form-control-sm" value="<?= $toko["MsWorkplaceName"]?>" readonly/>
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="MsWorkplaceAddress" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <textarea id="MsWorkplaceAddress" name="MsWorkplaceAddress" class="form-control form-control-sm" value="" readonly><?= $toko["MsWorkplaceAddress"]?></textarea>
                    </div>
                </div>  
                <div class=" row mb-1">
                    <label for="MsWorkplaceTelp1" class="col-sm-4 col-form-label">Telp1</label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceTelp1" name="MsWorkplaceTelp1" class="form-control form-control-sm number-hp" value="<?= $toko["MsWorkplaceTelp1"]?>" readonly/>
                    </div>
                </div>  
                <div class=" row mb-1">
                    <label for="MsWorkplaceTelp2" class="col-sm-4 col-form-label">Telp2</label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceTelp2" name="MsWorkplaceTelp2" class="form-control form-control-sm number-hp" value="<?= $toko["MsWorkplaceTelp2"]?>" readonly/>
                    </div>
                </div>  
                <div class=" row mb-1">
                    <label for="MsWorkplaceEmail" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceEmail" name="MsWorkplaceEmail" class="form-control form-control-sm" value="<?= $toko["MsWorkplaceEmail"]?>" readonly/>
                    </div>
                </div>    
                <div class=" row mb-1">
                    <label for="select-map" class="col-sm-4 col-form-label">Titik Map<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <div class="bg-pinpoint">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <span id="MsWorkplaceMap" class="label-small px-1 col-form-label"><?= $toko["MsWorkplaceMap"]?></span>
                            <button type="button" class="btn btn-light py-1 ms-auto btn-sm d-none" id="select-map" >Tandai Lokasi</button>
                        </div> 
                        <input id="MsWorkplaceLat" name="MsWorkplaceLat" type="text" class="form-control form-control-sm" value="<?= $toko["MsWorkplaceLat"]?>" style="display:none">
                        <input id="MsWorkplaceLng" name="MsWorkplaceLng" type="text" class="form-control form-control-sm" value="<?= $toko["MsWorkplaceLng"]?>" style="display:none">
                    </div>
                </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> 
            </div>
        </div>
    </div>
</div> 
