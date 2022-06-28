<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KK Belum Terbit</title>
    <?php $this->load->view("_partials/css.php"); ?>
    <!-- datatables -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/plugin/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/plugin/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <style>
        .line {
            flex: 1;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php $this->load->view("_partials/navbar.php"); ?>
        <?php $this->load->view("_partials/sidebar_container.php"); ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">KK Belum Terbit</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    KK Belum Terbit
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <table id="dt_kk" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center align-middle">NO</th>
                                            <th class="text-center align-middle">Perkara / Tanggal</th>
                                            <th class="text-center align-middle">Penggugat / Pemohon</th>
                                            <th class="text-center align-middle">Tergugat / Termohon</th>
                                            <th class="text-center align-middle">Akta Cerai</th>
                                            <th class="text-center align-middle">Akta Nikah</th>
                                            <th class="text-center align-middle">Penetapan Anak</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $this->load->view("_partials/numpang.php") ?>
            </section>
        </div>
        <?php $this->load->view("_partials/footer.php") ?>
        <?php $this->load->view("_partials/loader.php") ?>
        <aside class="control-sidebar control-sidebar-dark"></aside>
        <div id="modal_kk" class="modal fade bd-example-modal-lg">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-block">
                        <h4 class="modal-title text-center">Tambah KK</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url('asset/js/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('asset/js/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('asset/dist/js/adminlte.min.js') ?>"></script>
    <!-- datatables -->
    <script src="<?php echo base_url('asset/plugin/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugin/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugin/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugin/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <!-- Moment -->
    <script src="<?php echo base_url('asset/plugin/moment/moment-with-locales.min.js') ?>"></script>
    <script src="<?php echo base_url('asset/plugin/datatables/datetime-moment.js') ?>"></script>
    <script>
        var dt_kk;

        function no_hp(no) {
            const ptrn1 = /^0/;
            const ptrn2 = /^\+/;
            let text;
            let n0 = no;
            if(no == null || no=="")
            {
                no = "-";
                text = no;
            }
            else
            {
                no = no.replace(ptrn1,'62');
                no = no.replace(ptrn2, '');
                text = "<a href='https://web.whatsapp.com/send?phone=" + no +"' target='_blank'>" + n0 +"</a>";
            }            
            return text;
        }

        function nama_agama(id)
        {
            switch (id) {
                case "1":
                    return "Islam";
                    break;
                case "2":
                    return "Protestan";
                    break;
                case "3":
                    return "Katolik";
                    break;
                case "4":
                    return "Budha";
                    break;
                case "5":
                    return "Hindu";
                    break;
                case "6":
                    return "Lainnya";
                    break;
                case "7":
                    return "Kong Hu Cu";
                    break;
                default:
                    return "Tidak diketahui";
                    break;
            }
        }

        function nama_pendidikan(id) {
            switch (id) {
                case "0":
                    return "Tidak Ada";
                    break;
                case "1":
                    return "TK";
                    break;
                case "2":
                    return "SD";
                    break;
                case "3":
                    return "SLTP";
                    break;
                case "4":
                    return "SLTA";
                    break;
                case "5":
                    return "D1";
                    break;
                case "6":
                    return "D2";
                    break;
                case "7":
                    return "D3";
                    break;
                case "8":
                    return "D4";
                    break;
                case "9":
                    return "S1";
                    break;
                case "10":
                    return "S2";
                    break;
                case "11":
                    return "S3";
                    break;
                case "12":
                    return "Belum Sekolah";
                    break;
                default:
                    return "Tidak Diketahui";
                    break;
            }
        }

        function nama_hukum(id) {
            if(id=="347")
            {
                return "Talak Ba'in";
            }
            else
            {
                return "Talak Raj'i";
            }
        }

        function qobla_bada(id) {
            if(id=="1")
            {
                return "Ba'da Duhul";
            }
            else
            {
                return "Qobla Duhul";
            }
        }

        function faktor(id) {
            let faktor;
            switch (id) {
                case "13":
                    faktor = "Poligami tidak sehat";
                    break;
                case "16":
                    faktor = "Krisis Akhlak";
                    break;
                case "17":
                    faktor = "Cemburu";
                    break;
                case "10":
                    faktor = "Kawin Paksa";
                    break;
                case "12":
                    faktor = "Ekonomi";
                    break;
                case "18":
                    faktor = "Tidak Ada Tanggung Jawab";
                    break;
                case "19":
                    faktor = "Kawin Dibawah Umur";
                    break;
                case "7":
                    faktor = "Penganiayaan";
                    break;
                case "20":
                    faktor = "Dihukum";
                    break;
                case "21":
                    faktor = "Cacat Biologis";
                    break;
                case "22":
                    faktor = "Politik";
                    break;
                case "23":
                    faktor = "Gangguan Pihak Ke-3";
                    break;
                case "24":
                    faktor = "Tidak Ada Keharmonisan";
                    break;
                default:
                    faktor = "Lainnya";
                    break;
            }
            return faktor;
        }

        function keadaan_istri(id) {
            let istri;
            switch (id) {
                case "1":
                    istri = "Suci";
                    break;
                case "2":
                    istri = "Haidh";
                    break;
                case "3":
                    istri = "Hamil";
                    break;
                default:
                    istri = "Tidak Diketahui";
                    break;
            }
            return istri;
        }

        $(document).ready(function(){
            $("#sidebar_kk").addClass("active");
            $("#sidebar_kk_belum").addClass("active");
            moment.locale('id');
            $.fn.dataTable.moment('LL');
            
            // fix sesuai sipesut
            // dt_kk = $("#dt_kk").DataTable({
            //     dom:'Bfrtip',
            //     ajax: {
            //         url: "<?php echo base_url('kk/data_belum'); ?>",
            //         beforeSend: function(){
            //             $(".loader2").show();
            //         },
            //         dataSrc: "",
            //         complete: function()
            //         {
            //             $(".loader2").hide();
            //         }
            //     },
            //     columns: [
            //         {data:null,sortalbe:false, render: function(data,type,row,meta){
            //             return meta.row + meta.settings._iDisplayStart + 1;
            //         }},
            //         {data:"nomor_perkara", render: function(data,type,row,meta){
            //             var dateObj = new Date(row.tanggal_putusan);
            //             var momentObj = moment(dateObj);
            //             return row.nomor_perkara + "<br>" + momentObj.format('LL');
            //         }},
            //         {data:"nama_p", render: function(data,type,row,meta){
            //             return "Nama : " + row.nama_p + "<br>NIK : " + row.nik_p + "<br>Umur : " + row.umur_p + " tahun<br>Agama : " + nama_agama(row.agama_id_p) + "<br>Pendidikan : " + nama_pendidikan(row.pendidikan_id_p) + "<br>Pekerjaan : " + row.pekerjaan_p + "<br>Alamat : " + row.alamat_p;
            //         }},
            //         {data:"nama_t", render: function(data,type,row,meta){
            //             return "Nama : " + row.nama_t + "<br>NIK : " + row.nik_t + "<br>Umur : " + row.umur_t + " tahun<br>Agama : " + nama_agama(row.agama_id_t) + "<br>Pendidikan : " + nama_pendidikan(row.pendidikan_id_t) + "<br>Pekerjaan : " + row.pekerjaan_t + "<br>Alamat : " + row.alamat_t;
            //         }},
            //         {data:"keadaan_istri", render: function(data,type,row,meta){
            //             return "Hukum : " + nama_hukum(row.jenis_perkara_id) + "<br>Keadaan Tergugat / Termohon : " + qobla_bada(row.qobla_bada) + "<br>Sebab : " + faktor(row.faktor_perceraian_id) + "<br>Perceraian Ke : " + row.perceraian_ke;
            //         }},
            //         {data:"tgl_akta_cerai", render: function(data,type,row,meta){
            //             var dateObj = new Date (row.tgl_akta_cerai);
            //             var momentObj = moment(dateObj);
            //             return "Nomor : " + row.nomor_akta_cerai + "<br>Tanggal : " + momentObj.format('LL');
            //         }},
            //         {data:"tgl_kutipan_akta_nikah", render: function(data,type,row,meta){
            //             var dateObj = new Date (row.tgl_kutipan_akta_nikah);
            //             var momentObj = moment(dateObj);
            //             return "Nomor : " + row.no_kutipan_akta_nikah + "<br>Tanggal : " + momentObj.format('LL') + "<br>KUA : " + row.kua_tempat_nikah;
            //         }},
            //         {data:"keadaan_istri", render: function(data,type,row,meta){
            //             return keadaan_istri(row.keadaan_istri);
            //         }},
            //         {data:"LamanyaNikah", render: function(data,type,row,meta){
            //             return row.LamanyaNikah + " tahun";
            //         }}
            //     ],
            //     responsive: true,
            //     autoWidth: false,
            //     columnDefs: [
            //         { responsivePriority: 1, targets: [2,3,5]}
            //     ]
            // });
            // end fix sesuai sipesut
            // coba sesuai MOU
            dt_kk = $("#dt_kk").DataTable({
                dom:'Bfrtip',
                ajax: {
                    url: "<?php echo base_url('kk/data_belum'); ?>",
                    beforeSend: function(){
                        $(".loader2").show();
                    },                    
                    dataSrc: "",
                    complete: function()
                    {
                        $(".loader2").hide();
                    }
                },
                columns: [
                    {data:"perkara_id"},
                    {data:null,sortalbe:false, render: function(data,type,row,meta){
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }},
                    {data:"nomor_perkara", render: function(data,type,row,meta){
                        var dateObj = new Date(row.tanggal_putusan);
                        var momentObj = moment(dateObj);
                        return row.nomor_perkara + "<br><div class='line'></div>" + momentObj.format('LL');
                    }},
                    {data:"nama_p", render: function(data,type,row,meta){
                        var dateObj = new Date(row.tanggal_lahir_p);
                        var momentObj = moment(dateObj);
                        return "Nama : " + row.nama_p + "<br><div class='line'></div>NIK : " + row.nik_p + "<br><div class='line'></div>Tanggal Lahir : " + momentObj.format('LL') + "<br><div class='line'></div>Agama : " + nama_agama(row.agama_id_p) + "<br><div class='line'></div>Pekerjaan : " + row.pekerjaan_p + "<br><div class='line'></div>Alamat : " + row.alamat_p + "<br><div class='line'></div>HP : " + no_hp(row.p_telp);
                    }},
                    {data:"nama_t", render: function(data,type,row,meta){
                        var dateObj = new Date(row.tanggal_lahir_t);
                        var momentObj = moment(dateObj);
                        return "Nama : " + row.nama_t + "<br><div class='line'></div>NIK : " + row.nik_t + "<br><div class='line'></div>Tanggal Lahir : " + momentObj.format('LL') + "<br><div class='line'></div>Agama : " + nama_agama(row.agama_id_t) + "<br><div class='line'></div>Pekerjaan : " + row.pekerjaan_t + "<br><div class='line'></div>Alamat : " + row.alamat_t + "<br><div class='line'></div>HP : " + no_hp(row.t_telp);
                    }},
                    {data:"tgl_akta_cerai", render: function(data,type,row,meta){
                        var dateObj = new Date(row.tgl_akta_cerai);
                        var momentObj = moment(dateObj);
                        return "Nomor : " + row.nomor_akta_cerai + "<br><div class='line'></div>Tanggal : " + momentObj.format('LL');
                    }},
                    {data:"tgl_nikah", render: function(data,type,row,meta){
                        var dateObj = new Date(row.tgl_nikah);
                        var momentObj = moment(dateObj);
                        return "Nomor : " + row.no_kutipan_akta_nikah + "<br><div class='line'></div>Tanggal : " + momentObj.format('LL') + "<br><div class='line'></div>" + row.kua_tempat_nikah;
                    }},
                    {data:"amar_putusan", render: function(data,type,row,meta){
                        var d = data.toLowerCase();
                        if(d.indexOf('asuh') !== -1 || d.indexOf('hadanah') !== -1 || d.indexOf('hadhanah') !== -1)
                        {
                            return data;
                        }
                        else
                        {
                            return 'Tidak ditentukan';
                        }                        
                    }}
                ],
                responsive: true,
                autoWidth: false,
                order: false,
                columnDefs: [
                    { responsivePriority: 1, targets: [3,4]},
                    { sortable: false, targets: [2,3,4,5,6,7]},
                    { visible: false, targets: [0]}
                ]
            });
            $("#dt_kk").on('page.dt', function(){
                $('html, body').animate({
                    scrollTop: $('#dt_kk').offset().top
                }, 200);
            });
            $('#dt_kk tbody').on('click', 'tr', function(e){
                e.preventDefault();
                var currentRow = $(this).closest('li').length ? $(this).closest('li') : $(this).closest('tr');                
                var data = $("#dt_kk").DataTable().row(currentRow).data();
                console.log(data);
            });
            // end coba MOU
        });
    </script>
</body>
</html>