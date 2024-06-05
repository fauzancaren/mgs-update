<div class="modal fade" id="modal-action" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content needs-validation" >
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Toko</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="InfoId" name="InfoId" class="form-control form-control-sm d-none" value="" > 
                <div class=" row mb-1">
                    <label for="MsWorkplaceCode" class="col-sm-4 col-form-label">Kode<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceCode" name="MsWorkplaceCode" class="form-control form-control-sm" value="" required> 
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="MsWorkplaceName" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceName" name="MsWorkplaceName" class="form-control form-control-sm" value=""/>
                    </div>
                </div>
                <div class=" row mb-1">
                    <label for="MsWorkplaceAddress" class="col-sm-4 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceAddress" name="MsWorkplaceAddress" class="form-control form-control-sm" value=""/>
                    </div>
                </div>  
                <div class=" row mb-1">
                    <label for="MsWorkplaceTelp1" class="col-sm-4 col-form-label">Telp1</label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceTelp1" name="MsWorkplaceTelp1" class="form-control form-control-sm number-hp" value=""/>
                    </div>
                </div>  
                <div class=" row mb-1">
                    <label for="MsWorkplaceTelp2" class="col-sm-4 col-form-label">Telp2</label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceTelp2" name="MsWorkplaceTelp2" class="form-control form-control-sm number-hp" value=""/>
                    </div>
                </div>  
                <div class=" row mb-1">
                    <label for="MsWorkplaceEmail" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="text" id="MsWorkplaceEmail" name="MsWorkplaceEmail" class="form-control form-control-sm" value=""/>
                    </div>
                </div>    
                <div class=" row mb-1">
                    <label for="select-map" class="col-sm-4 col-form-label">Titik Map<sup class="error">&nbsp;*</sup></label>
                    <div class="col-sm-8">
                        <div class="bg-pinpoint">
                            <i class="fas fa-map-marker-alt fa-2x"></i>
                            <span id="MsWorkplaceMap" class="label-small px-1 col-form-label">Tandai lokasi dalam peta</span>
                            <button type="button" class="btn btn-light py-1 ms-auto btn-sm" id="select-map" >Tandai Lokasi</button>
                        </div> 
                        <input id="MsWorkplaceLat" name="MsWorkplaceLat" type="text" class="form-control form-control-sm" value="-6.350609671540372" style="display:none">
                        <input id="MsWorkplaceLng" name="MsWorkplaceLng" type="text" class="form-control form-control-sm" value="106.70655403467558" style="display:none">
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

  
<div class="modal fade" id="modal-action-map" tabindex="-1" role="dialog" data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content shadow-lg"  name="form-action-delivery">
            <div class="modal-header">
                <h6 class="modal-title"><i class="fas fa-map-marker-alt text-secondary" aria-hidden="true"></i> &nbsp;Pilih lokasi map</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="alert alert-warning d-flex align-items-center m-2" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill pe-2" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5m.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
                <div>
                    Pastikan titik map sesuai dengan alamat yang tercantum sebelumnya
                </div>
            </div>
            <div class="modal-body">
                <div style="height:450px;display:block">
                    <input id="text-pac-input" type="text" class="form-control" placeholder="Tulis jalan / perumahan / gedung" aria-describedby="label-pac-input">
                    <div id="map" style="height: 100%;"></div>
                </div>
            </div>
            <div class="modal-footer m-0 p-2" style="border-radius:0.3rem;border-top-right-radius:0px;border-top-left-radius:0px;">
                <div id="location-text"></div>
            </div>
        </div>
    </div>
</div>
	
<script> 
    var api_map, api_input, api_searchBox, api_markers, api_geocoder;
    var modal_action = new bootstrap.Modal(document.getElementById('modal-action'));
    $('.number-hp').toArray().forEach(function(field){
        new Cleave(field, {
            phone: true,
            phoneRegionCode: 'ID'
        });
    }); 
 
    $("#btn-submit").click(function(){ 

        //validasi
        if($("#MsWorkplaceCode").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan Kode terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#MsWorkplaceName").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan nama terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#MsWorkplaceAddress").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan Email terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#MsWorkplaceTelp1").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan Alamat terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        }
        if($("#MsWorkplaceTelp2").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan ID Mesin terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
            });
            return false
        } 
        if($("#MsWorkplaceEmail").val() == "" ) {
            Swal.fire({
                icon: 'error',
                title: 'Data Belum Lengkap',
                text: "Silahkan Masukan No Hp terlebih dahulu",
                // showConfirmButton: false,
                // timer: 1500
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

    async function initMap() {
        $("#select-map").click(function() {
            mode = "action map";
            $("#modal-action-map").modal("show");
            modal_action.hide();
            if ($("#MsWorkplaceMap").text() != "Tandai lokasi dalam peta") {
                maplocation = {
                    lat: $("#MsWorkplaceLat").val(),
                    lng: $("#MsWorkplaceLng").val()
                };
                mapaddress = {
                    address: $("#MsWorkplaceMap").text()
                };
            } else { 
                maplocation = {
                    lat: -6.350609671540372,
                    lng: 106.70655403467558
                };
                mapaddress = {
                    address: "JPX4+MJM, Bakti Jaya, Kec. Setu, Kota Tangerang Selatan, Banten 15315, Indonesia"
                };
            }
            api_map.setCenter(maplocation);
        }); 

        var maplocation = {lat: -6.350609671540372, lng: 106.70655403467558};
        var mapaddress = {address : "JPX4+MJM, Bakti Jaya, Kec. Setu, Kota Tangerang Selatan, Banten 15315, Indonesia"};
        
        set_location_address = function(location,address){
            maplocation = location;
            address = address;
        }

        function set_text_address(){
                $("#location-text").html("<span>" + mapaddress.address + "</span>")
        }

        api_geocoder = await new google.maps.Geocoder();
        api_map = await new google.maps.Map(document.getElementById("map"), {
                center: maplocation,
                zoom: 20,
                zoomControl : false,
                keyboardShortcuts : false,
                disableDefaultUI: true,
                clickableIcons: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        api_map.setZoom(19);
        api_map.setCenter(maplocation);
        $("<div/>").addClass("centerMarker").appendTo(api_map.getDiv());
        $("<div class='centerButton'>Pilih lokasi ini<div/>").appendTo(api_map.getDiv()).click(function(){
            $("#MsWorkplaceMap").text(mapaddress.address);
            $("#MsWorkplaceLat").val(maplocation.lat);
            $("#MsWorkplaceLng").val(maplocation.lng);
            $("#modal-action-map").modal("hide");
            modal_action.show();
        });

        // Create the search box and link it to the UI element.
        api_input = document.getElementById("text-pac-input");
        api_map.controls[google.maps.ControlPosition.TOP_LEFT].push(api_input);
        api_searchBox = new google.maps.places.SearchBox(api_input);

        // Bias the SearchBox results towards current maps viewport.
        api_map.addListener("bounds_changed", () => {
            maplocation = api_map.getCenter();
            api_searchBox.setBounds(api_map.getBounds());
            set_text_address();
        });
        api_map.addListener("mouseup", () => {
                
            $(".centerMarker").removeClass("mousedown");
            maplocation = api_map.getCenter();
            api_geocoder
            .geocode({ location: maplocation})
            .then((response) => {
                if (response.results[0]) {
                    try{
                        mapaddress.address = response.results[0].plus_code.compound_code.slice(8);
                    }catch(err){
                        mapaddress.address = response.results[0].formatted_address;
                    }
                    set_text_address();
                }else{
                    console.log("api_map.addListener geocode => No results found");
                }
            })
            .catch((e) => console.log("api_map.addListener geocode => No results found" + e));
        });
        api_map.addListener("mousedown", () => { 
            $(".centerMarker").addClass("mousedown");
        });
        api_markers = [];

        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        api_searchBox.addListener("places_changed", () => {
            const places = api_searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }
            // Clear out the old api_markers.
            api_markers.forEach((marker) => {
                marker.setMap(null);
            });
            api_markers = [];

            // For each place, get the icon, name and location.
            const bounds = new google.maps.LatLngBounds();
            places.forEach((place) => {
                if (!place.geometry || !place.geometry.location) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                const icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25),
                };
                // Create a marker for each place.
                api_markers.push(
                    new google.maps.Marker({
                        api_map,
                        icon,
                        title: place.name,
                        position: place.geometry.location,
                    })
                );
                maplocation = place.geometry.location;
                try{
                    mapaddress.address = place.plus_code.compound_code.slice(8);
                }catch(err){
                    mapaddress.address = place.formatted_address;
                }
                set_text_address();
                if (place.geometry.viewport) {
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });
            api_map.fitBounds(bounds);
            api_map.setZoom(19);
            api_map.setCenter(maplocation);
        });
    }
    window.initMap = initMap;
 
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpTnP-tVCA2m8Y5dYwOHKR8wSxnT_KEus&libraries=places&language=id&region=ID&callback=initMap" defer></script>
