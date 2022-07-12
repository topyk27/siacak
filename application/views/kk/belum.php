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
        <div id="modal_kk" class="modal fade bd-example-modal-lg" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header d-block">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title text-center">Detail Perkara</h4>
                        <h4 name="no_perk">Lorep Ipsum</h4>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <!-- <button class="nav-link active" id="data-umum-tab" data-bs-toogle="tab" data-bs-target="#data-umum" type="button" role="tab" aria-controls="data-umum" aria-selected="true">Data Umum</button> -->
                                <!-- <a href="#data-umum" class="nav-link active" aria-controls="data-umum" data-bs-toogle="tab" role="tab">Data Umum</a> -->
                                <a href="#" id="a_data_umum_tab" class="nav-link">Data Umum</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <!-- <button class="nav-link" id="p-tab" data-bs-toogle="tab" data-bs-target="#p" type="button" role="tab" aria-controls="p" aria-selected="false">Penggugat</button> -->
                                <!-- <a href="#p" class="nav-link" aria-controls="p" data-bs-toogle="tab" role="tab">Penggugat</a> -->
                                <a href="#" id="a_p_tab" class="nav-link">Penggugat</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <!-- <button class="nav-link" id="t-tab" data-bs-toogle="tab" data-bs-target="#t" type="button" role="tab" aria-controls="t" aria-selected="false">Tergugat</button> -->
                                <a href="#" id="a_t_tab" class="nav-link">Tergugat</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <!-- <button class="nav-link" id="anak-tab" data-bs-toogle="tab" data-bs-target="#anak" type="button" role="tab" aria-controls="anak" aria-selected="false">Anak</button> -->
                                <a href="#" id="a_anak_tab" class="nav-link">Anak</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="data-umum" role="tabpanel" aria-labelledby="data-umum-tab">
                                <div class="form-group">
                                    <label for="no_perkara">Perkara</label>
                                    <input type="text" class="form-control" name="no_perkara" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="no_ac">Akta Cerai</label>
                                    <input type="text" class="form-control" name="no_ac" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_ac">Tanggal Akta Cerai</label>
                                    <input type="text" class="form-control" name="tanggal_ac" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="no_akta_nikah">Buku Nikah</label>
                                    <input type="text" class="form-control" name="no_akta_nikah" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_menikah">Tanggal Nikah</label>
                                    <input type="text" class="form-control" name="tanggal_menikah" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="kua">Tempat Menikah</label>
                                    <input type="text" class="form-control" name="kua" readonly>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="p" role="tabpanel" aria-labelledby="p-tab">
                                <div class="form-group">
                                    <label for="nama_p">Nama</label>
                                    <input type="text" class="form-control" name="nama_p" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nik_p">NIK</label>
                                    <input type="text" class="form-control" name="nik_p" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir_p">Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="tanggal_lahir_p" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="agama_p">Agama</label>
                                    <input type="text" class="form-control" name="agama_p" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_p">Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan_p" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_p">Alamat</label>
                                    <!-- <input type="text" class="form-control" name="alamat_p" readonly> -->
                                    <textarea name="alamat_p" class="form-control" readonly></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp_p">Nomor HP</label>
                                    <input type="text" class="form-control" name="no_hp_p" readonly>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="t" role="tabpanel" aria-labelledby="t-tab">
                                <div class="form-group">
                                    <label for="nama_t">Nama</label>
                                    <input type="text" class="form-control" name="nama_t" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="nik_t">NIK</label>
                                    <input type="text" class="form-control" name="nik_t" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir_t">Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="tanggal_lahir_t" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="agama_t">Agama</label>
                                    <input type="text" class="form-control" name="agama_t" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan_t">Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan_t" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="alamat_t">Alamat</label>
                                    <!-- <input type="text" class="form-control" name="alamat_t" readonly> -->
                                    <textarea name="alamat_t" class="form-control" readonly></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp_t">Nomor HP</label>
                                    <input type="text" class="form-control" name="no_hp_t" readonly>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="anak" role="tabpanel" aria-labelledby="anak-tab">
                                <div class="form-group">
                                    <label for="penetapan_anak">Penetapan Anak</label>
                                    <input type="text" class="form-control" name="penetapan_anak" readonly>                                    
                                    <p name="p_penetapan_anak" style="display:none;"></p>
                                    <label for="pernyataan">Surat Pernyataan Anak</label>
                                    <input type="file" name="pernyataan" id="pernyataan" class="form-control" accept="application/pdf">
                                    <div class="embed-responsive" style="display: none;">
                                        <!-- <iframe src="" class="embed-responsive-item" id="viewer"></iframe> -->
                                        <canvas id="viewer" class="embed-responsive-item"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>                        
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.14.305/pdf.min.js"></script>
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
                text = "<a href='https://web.whatsapp.com/send?phone=" + no +"' target='_blank' class='no-pihak'>" + n0 +"</a>";
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

        // tab
        function change_tab(tab){
            $("#modal_kk .modal-body .tab-content div").removeClass('active');
            $("#modal_kk .modal-body .tab-content #"+tab).addClass('show active');
        }
        // end tab

        // preview pdf
        function preview_pdf(){
            pdf = $("input[name='pernyataan']").files[0];
            pdf_url = URL.createObjectURL(pdf);
            $("#viewer").attr('src',pdf_url);
            $(".embed-responsive").show();
        }
        // end preview pdf

        $(document).ready(function(){
            $("#sidebar_kk").addClass("active");
            $("#sidebar_kk_belum").addClass("active");
            // tab
            $("#a_data_umum_tab, #a_p_tab, #a_t_tab, #a_anak_tab").click(function(e){                
                e.preventDefault();
                switch (this.getAttribute('id')) {
                    case 'a_data_umum_tab':
                        change_tab('data-umum');
                        break;
                    case 'a_p_tab' :
                        change_tab('p');
                        break;
                    case 'a_t_tab' :
                        change_tab('t');
                        break;
                    case 'a_anak_tab' :
                        change_tab('anak');
                        break;                    
                }
                
            });
            // end tab
            // preview pdf
            $("input[name='pernyataan']").on('change', function(){
                // pdf = $("input[name='pernyataan']").files[0];
                pdf = document.getElementById('pernyataan').files[0];
                pdf_url = URL.createObjectURL(pdf);
                // $("#viewer").attr('src',pdf_url);
                $(".embed-responsive").show();
                var myState = {
                    pdf: null,
                    currentPage: 1,
                    zoom: 1,
                }
                pdfjsLib.getDocument(pdf_url).then((pdf) => {                    
                    myState.pdf = pdf;
                    render();
                });
            });
            function render(){
                myState.pdf.getPage(myState.currentPage).then((page) => {
                    var canvas = document.getElementById("viewer");
                    var ctx = canvas.getContext('2d');
                    var viewport = page.getViewport(myState.zoom);
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;
                    page.render({
                        canvasContext: ctx,
                        viewport: viewport
                    });
                });
            }
            // end preview pdf
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
                    {data:null, render: function(data,type,row,meta){
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
                    { responsivePriority: 1, targets: [1,3,4]},
                    { sortable: false, targets: [2,3,4,5,6,7]},
                    { visible: false, targets: [0]}
                ]
            });
            // end coba MOU
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
                // console.log(data['agama_id_p']);
                $("#modal_kk").modal('show');
                // modal detail                
                change_tab('data-umum');
                // data umum
                $("input[name='no_perkara']").val(data['nomor_perkara']);
                $("input[name='no_ac']").val(data['nomor_akta_cerai']);
                $("input[name='tanggal_ac']").val(function(){
                    var dateObj = new Date(data['tgl_akta_cerai']);
                    var momentObj = moment(dateObj);
                    return momentObj.format('LL');
                });
                $("input[name='no_akta_nikah']").val(data['no_kutipan_akta_nikah']);
                $("input[name='tanggal_menikah']").val(function(){
                    var dateObj = new Date(data['tgl_nikah']);
                    var momentObj = moment(dateObj);
                    return momentObj.format('LL');
                });
                $("input[name='kua']").val(data['kua_tempat_nikah']);
                // end data umum
                // data p
                $("input[name='nama_p']").val(data['nama_p']);
                $("input[name='nik_p']").val(data['nik_p']);
                $("input[name='tanggal_lahir_p']").val(function(){
                    var dateObj = new Date(data['tanggal_lahir_p']);
                    var momentObj = moment(dateObj);
                    return momentObj.format('LL');
                });
                $("input[name='agama_p']").val(nama_agama(data['agama_id_p']));
                $("input[name='pekerjaan_p']").val(data['pekerjaan_p']);
                $("textarea[name='alamat_p']").val(data['alamat_p']);
                $("input[name='no_hp_p']").val(function(){
                    var no = data['p_telp'];
                    if(no == null || no=="")
                    {
                        return "Tidak ada nomor hp";
                    }
                    else
                    {
                        return no;
                    }
                });
                // end data p
                // data t
                $("input[name='nama_t']").val(data['nama_t']);
                $("input[name='nik_t']").val(data['nik_t']);
                $("input[name='tanggal_lahir_t']").val(function(){
                    var dateObj = new Date(data['tanggal_lahir_t']);
                    var momentObj = moment(dateObj);
                    return momentObj.format('LL');
                });
                $("input[name='agama_t']").val(nama_agama(data['agama_id_t']));
                $("input[name='pekerjaan_t']").val(data['pekerjaan_t']);
                $("textarea[name='alamat_t']").val(data['alamat_t']);
                $("input[name='no_hp_t']").val(function(){
                    var no = data['t_telp'];
                    if(no == null || no=="")
                    {
                        return "Tidak ada nomor hp";
                    }
                    else
                    {
                        return no;
                    }
                });
                // end data t
                // anak
                var d = data['amar_putusan'].toLowerCase();
                if(d.indexOf('asuh') !== -1 || d.indexOf('hadanah') !== -1 || d.indexOf('hadhanah') !== -1)
                {
                    $("input[name='penetapan_anak']").hide();
                    $("input[name='penetapan_anak']").prop('disabled',true);
                    $("p[name='p_penetapan_anak']").show();
                    $("p[name='p_penetapan_anak']").append(data['amar_putusan']);
                }
                else
                {                    
                    $("p[name='p_penetapan_anak']").hide();
                    $("p[name='p_penetapan_anak']").empty();
                    $("input[name='penetapan_anak']").prop('disabled',false);
                    $("input[name='penetapan_anak']").show();
                    $("input[name='penetapan_anak']").val('Tidak ditentukan');
                }  
                // end anak
                // end modal detail
            });            
        });
    </script>
</body>
</html>