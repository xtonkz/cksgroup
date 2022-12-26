$(document).ready(function(){
    //  var data_user = $("#data_user").attr('url');
    // var data_afi = $("#data_afi").attr('url');
    // var data_pstnk = $("#data_pstnk").attr('url');
    // var data_mstnk = $("#data_mstnk").attr('url');
    // var data_stnkjadi = $("#data_stnkjadi").attr('url');
    // var data_invoice = $("#data_invoice").attr('url');

    // do_table
    $('#manage_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_user
        },
        columns: [
            { data: 'name' },
            { data: 'email' },
            { data: 'password' },
            { data: 'role' },
                 
        ]
    });


    //afi_table
    $('#afi_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_afi
        },
        columns: [
            { data: 'cust_name' },
            { data: 'cust_address' },
            { data: 'cust_address2' },
            { data: 'chasis' },
            { data: 'branch' },
            { data: 'jenis_chasis' },
            { data: 'modem_date' },
            { data: 'faktur_turun' }
               
        ]
    });


    //pstnk_table
    $('#pstnk_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_pstnk
        },
        columns: [
            { data: 'cust_name' },
            { data: 'business_unit' },
            { data: 'branch' },
            { data: 'chasis' },
            { data: 'wilayah' },
            { data: 'faktur_date' },
            { data: 'cek_fisik' },
            { data: 'terima_faktur' },
            { data: 'terima_berkasafi' },
            { data: 'pilnop' },
            { data: 'keterangan' }

        ]
    });


    //mstnk_table
    $('#mstnk_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_mstnk
        },
        columns: [
            { data: 'cust_name'},
            { data: 'business_unit'},
            { data: 'branch'},
            { data: 'birojasa'},
            { data: 'chasis'},
            { data: 'wilayah'},
            { data: 'efektif_faktur'},
            { data: 'cek_fisik'},
            { data: 'terima_faktur'},
            { data: 'berkas_cust'},
            { data: 'tgl_mohon'},
            { data: 'est_stnkjadi'},
            { data: 'tgl_notice'},
            { data: 'nopol'},
            { data: 'pilnop'},
            { data: 'keterangan'}
        ]
    });    

    //stnkjadi
    $('#stnkjadi_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_stnkjadi
        },
        columns: [
            { data: 'cust_name'},
            { data: 'business_unit'},
            { data: 'branch'},
            { data: 'chasis'},
            { data: 'wilayah'},
            { data: 'tgl_mohon'},
            { data: 'tgl_notice'},
            { data: 'nopol'},
            { data: 'tgl_stnkjadi'},
            { data: 'keterangan'},
            { data: 'remark'}
        ]
    }); 

    //inv
    $('#inv_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: data_invoice
        },
        columns: [
            { data: 'birojasa'},
            { data: 'inv_no'},
            { data: 'chasis'},
            { data: 'cust_name'},
            { data: 'business_unit'},
            { data: 'branch'},
            { data: 'wilayah'},
            { data: 'nopol'},
            { data: 'tgl_notice'},
            { data: 'tgl_invoice'},
            { data: 'tgl_bayar'}
        ]
    }); 
    
 });//doc.ready


 function closeFunction(){
    document.getElementById('alert_upload').style.display = 'none';

 }