<!-- Main Content -->
<main>
    <h1>MASTER - KARYAWAN</h1>
    <div class="recent-orders">  
        <div class="row">
            <div class="col-lg-6 col-12"> 
                <div class="row mb-1 align-items-center">
                    <label for="tb_row" class="col-sm-3 col-form-label">Tampilkan</label>
                    <div class="col-3">
                        <select class="custom-select custom-select-sm form-control form-control-sm" id="tb_row" name="tb_row"> 
                            <option value="10" selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <label class="col-3 col-form-label ps-0">baris</label>
                </div>
            </div>
            <div class="col-lg-6 col-12"> 
                <div class="row mb-1">
                    <label for="tb_search" class="col-sm-3 col-form-label">Pencarian</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control form-control-sm" id="tb_search">
                    </div>
                </div> 
            </div>
        </div>
        <table id="table_data" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Logo</th>
                    <th>nama</th>
                    <th>Alamat</th>   
                    <th></th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <div class="d-flex justify-content-center pt-4"> 
            <button class="btn btn-sm btn-primary" id="add-karyawan">Tambah Data</button> 
        </div>
    </div> 
    
    <div id="dialog-box"></div>
</main>

<script>
    var req_status;
    var table = $('#table_data').DataTable({
        "responsive": true,
        "searching": false,
        "lengthChange": false,
        "pageLength": parseInt($('#tb_row').val()),
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "<?php echo base_url('admin/karyawan/get') ?>",
            "type": "POST",
            "data": function(data) {
                data.search['value'] = $('#tb_search').val(); 
            }
        },
        "order": [],
        "columnDefs": [{
                "orderable": false,
                targets: 0
            },
            {
                "orderable": false,
                targets: 4,
                "className": 'details-control', 
            }, 
        ], 
    }); 
    $('#table-users').on('processing.dt', function(e, settings, processing) {
        if (processing) {
            // $('#tb_data_respon').hide();
        } else {
            // $('#tb_data_respon').show();
        }
    });
    $('#tb_search').keyup(function() {
        table.ajax.reload(null, false).responsive.recalc().columns.adjust();
    });
    $('#tb_row').change(function() {
        table.page.len(parseInt($('#tb_row').val())).draw();
    });

    
    $("#add-karyawan").click(function(e) {
        e.preventDefault();
        if (!req_status) {
            $.ajax({
                url: "<?php echo base_url('admin/karyawan/add') ?>",
                beforeSend: function() {
                    req_status = 1;
                },
                success: function(response) {
                    $("#dialog-box").html(response);
                    modal_action = new bootstrap.Modal(document.getElementById('modal-action'));
                    modal_action.show();
                    req_status = 0;
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                    req_status = 0;
                }
            });
        }
    })
</script>