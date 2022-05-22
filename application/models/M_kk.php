<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kk extends CI_Model
{
    public function belum()
    {
        $this->config->load('configku',TRUE);
		$mulai_tahun = $this->config->item('mulai_tahun','configku');
        $db_sipp = $this->load->database('sipp', TRUE);
        // fix kalo sesuai dengan sipesut
        // $statement = "SELECT DISTINCT p.telepon AS p_telp, pt.telepon AS t_telp, a.nomor_perkara, a.tanggal_putusan, b.nama AS nama_p, b.nomor_indentitas AS nik_p,
		// (YEAR(CURDATE())-YEAR(b.tanggal_lahir)) AS umur_p, b.agama_id AS agama_id_p, b.pendidikan_id AS pendidikan_id_p, b.pekerjaan AS pekerjaan_p,b.alamat AS alamat_p,
		// c.nama AS nama_t, c.nomor_indentitas AS nik_t,(YEAR(CURDATE())-YEAR(c.tanggal_lahir)) AS umur_t, c.agama_id AS agama_id_t, c.pendidikan_id AS pendidikan_id_t, c.pekerjaan AS pekerjaan_t,c.alamat AS alamat_t, d.qobla_bada,d.faktor_perceraian_id,
		// d.perceraian_ke,d.nomor_akta_cerai,d.tgl_akta_cerai,a.no_kutipan_akta_nikah,a.tgl_kutipan_akta_nikah,
		// a.kua_tempat_nikah, d.keadaan_istri,(YEAR(CURDATE())-YEAR(a.tgl_nikah)) AS LamanyaNikah,
		// a.jenis_perkara_id FROM v_perkara a, v_pihak b,v_pihak c, perkara_akta_cerai d, pihak p, pihak pt, perkara_pihak1 p1, perkara_pihak2 p2 WHERE a.pihak1_text=b.nama AND a.perkara_id=b.perkara_id AND a.`pihak2_text`=c.nama AND a.`perkara_id`=c.`perkara_id` AND b.nama=p1.nama AND p.nama=p1.nama AND c.nama=p2.nama AND pt.nama=p2.nama AND a.`perkara_id`=d.`perkara_id` AND d.nomor_akta_cerai!='' AND YEAR(d.tgl_akta_cerai) = '$mulai_tahun' ORDER BY a.perkara_id ASC LIMIT 1";
        // end fix
        // coba kalo sesuai MOU
        $statement = "SELECT DISTINCT p.telepon AS p_telp, pt.telepon AS t_telp, a.nomor_perkara, a.tanggal_putusan, b.nama AS nama_p, b.nomor_indentitas AS nik_p, b.tanggal_lahir AS tanggal_lahir_p, b.agama_id AS agama_id_p, b.pekerjaan AS pekerjaan_p, b.alamat AS alamat_p, c.nama AS nama_t, c.nomor_indentitas AS nik_t, c.tanggal_lahir AS tanggal_lahir_t, c.agama_id AS agama_id_t, c.pekerjaan AS pekerjaan_t,c.alamat AS alamat_t, d.nomor_akta_cerai, d.tgl_akta_cerai, a.amar_putusan FROM v_perkara a, v_pihak b,v_pihak c, perkara_akta_cerai d, pihak p, pihak pt, perkara_pihak1 p1, perkara_pihak2 p2 WHERE a.pihak1_text=b.nama AND a.perkara_id=b.perkara_id AND a.`pihak2_text`=c.nama AND a.`perkara_id`=c.`perkara_id` AND b.nama=p1.nama AND p.nama=p1.nama AND c.nama=p2.nama AND pt.nama=p2.nama AND a.`perkara_id`=d.`perkara_id` AND d.nomor_akta_cerai!='' AND YEAR(d.tgl_akta_cerai) = '$mulai_tahun' ORDER BY a.perkara_id ASC";
        // end coba sesuai MOU
        $query = $db_sipp->query($statement);
        return $query->result();
    }
}

 ?>