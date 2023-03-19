<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rps extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model_rps'));
        $this->model = $this->model_rps;
        $this->load->database();
        $this->load->helper('url');
    }
    public function index()
    {
        $data['tittle'] = 'RPS';
        $data['rps'] = $this->model_rps->get_data('tbl_rps')->result();
        // source rps

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('rps', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['tittle'] = 'Add RPS';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('add_rps');
        $this->load->view('templates/footer');
    }
    public function tambah_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'id_rps' => $id_rps,
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_prodi' => $this->input->post('nama_prodi'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'nama_dosen_penyusun' => $this->input->post('nama_dosen_penyusun'),
                'nik_dosen_penyusun' => $this->input->post('nik_dosen_penyusun'),
                'tgl_dosen' => $this->input->post('tgl_dosen'),
                'tgl_berlaku' => $this->input->post('tgl_berlaku'),
                'semester' => $this->input->post('semester'),
                'bobot_sks' => $this->input->post('bobot_sks'),
                'detail_penilaian' => $this->input->post('detail_penilaian'),
                'gambaran_umum' => $this->input->post('gambaran_umum'),
                'capaian_pembelajaran' => $this->input->post('capaian_pembelajaran'),
                'prasyarat_dan_pengetahuan_awal' => $this->input->post('prasyarat_dan_pengetahuan_awal'),
                'kemampuan_akhir_yang_diharapkan' => $this->input->post('kemampuan_akhir_yang_diharapkan'),
                'indikator' => $this->input->post('indikator'),
                'bahan_kajian' => $this->input->post('bahan_kajian'),
                'metode_pembelajaran' => $this->input->post('metode_pembelajaran'),
                'metode_penilaian' => $this->input->post('metode_penilaian'),
                'bahan_ajar' => $this->input->post('bahan_ajar'),
                'tugas_aktivitas' => $this->input->post('tugas_aktivitas'),
                'kemampuan_akhir_yang_diharapkan_atau_evaluasi' => $this->input->post('kemampuan_akhir_yang_diharapkan_atau_evaluasi'),
                'waktu' => $this->input->post('waktu'),
                'bobot' => $this->input->post('bobot'),
                'kriteria_penilaian' => $this->input->post('kriteria_penilaian'),
                'indikator_penilaian' => $this->input->post('indikator_penilaian'),
                'referensi' => $this->input->post('referensi'),
                'minggu_atau_pertemuan' => $this->input->post('minggu_atau_pertemuan'),
                'kemampuan_akhir_yang_diharapkan_2' => $this->input->post('kemampuan_akhir_yang_diharapkan_2'),
                'indikator_2' => $this->input->post('indikator_2'),
                'topik_dan_subtopik' => $this->input->post('topik_dan_subtopik'),
                'aktifitas_dan_strategi_pembelajaran' => $this->input->post('aktifitas_dan_strategi_pembelajaran'),

            );

            $this->model_rps->insert_data($data, 'tbl_rps');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Ditambahkan</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button></div>');
            redirect('rps');
        }
    }
    public function _rules()
    {
        // alert harus diisi
        $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('nama_matkul', 'Nama Matkul', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('kode_matkul', 'Kode Matkul', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('nama_dosen_penyusun', 'Nama Dosen', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('nik_dosen_penyusun', 'NIK Dosen', 'required', array(
            'int' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('tgl_dosen', 'Tanggal', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('tgl_berlaku', 'Tanggal Berlaku', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('semester', 'Semester', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('bobot_sks', 'bobot_sks', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('detail_penilaian', 'detail_penilaian', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('gambaran_umum', 'gambaran_umum', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('capaian_pembelajaran', 'capaian_pembelajaran', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('prasyarat_dan_pengetahuan_awal', 'prasyarat_dan_pengetahuan_awal', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('kemampuan_akhir_yang_diharapkan', 'kemampuan_akhir_yang_diharapkan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('indikator', 'indikator', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('bahan_kajian', 'bahan_kajian', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('metode_pembelajaran', 'metode_pembelajaran', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('metode_penilaian', 'metode_penilaian', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('bahan_ajar', 'bahan_ajar', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('tugas_aktivitas', 'tugas_aktivitas', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('kemampuan_akhir_yang_diharapkan_atau_evaluasi', 'kemampuan_akhir_yang_diharapkan_atau_evaluasi', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('waktu', 'waktu', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('bobot', 'bobot', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('kriteria_penilaian', 'kriteria_penilaian', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('indikator_penilaian', 'indikator_penilaian', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('referensi', 'referensi', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('minggu_atau_pertemuan', 'minggu_atau_pertemuan', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('kemampuan_akhir_yang_diharapkan_2', 'kemampuan_akhir_yang_diharapkan_2', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('indikator_2', 'indikator_2', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('topik_dan_subtopik', 'topik_dan_subtopik', 'required', array(
            'required' => '%s harus di isi !!'
        ));
        $this->form_validation->set_rules('aktifitas_dan_strategi_pembelajaran', 'aktifitas_dan_strategi_pembelajaran', 'required', array(
            'required' => '%s harus di isi !!'
        ));
    }
    public function delete($id)
    {

        $where = array('id_rps' => $id);

        $this->model_rps->delete($where, 'tbl_rps');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Data Berhasil Dihapus</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
        redirect('rps/');
    }
    public function edit($id)
    {

        $data['tittle'] = 'Edit RPS';
        $where = array('id_rps' => $id);
        $data['model'] = $this->model_rps->edit_data($where, 'tbl_rps')->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('edit_rps', $data);
        $this->load->view('templates/footer');
    }
    public function ubah($id)
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = array(
                'id_rps' => $id,
                'nama_prodi' => $this->input->post('nama_prodi'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_dosen_penyusun' => $this->input->post('nama_dosen_penyusun'),
                'nik_dosen_penyusun' => $this->input->post('nik_dosen_penyusun'),
                'tgl_dosen' => $this->input->post('tgl_dosen'),
                'tgl_berlaku' => $this->input->post('tgl_berlaku'),
                'semester' => $this->input->post('semester'),
                'detail_penilaian' => $this->input->post('detail_penilaian'),
                'bobot_sks' => $this->input->post('bobot_sks'),
                'gambaran_umum' => $this->input->post('gambaran_umum'),
                'penilaian' => $this->input->post('penilaian'),
                'revisi' => $this->input->post('revisi'),
                'capaian_pembelajaran' => $this->input->post('capaian_pembelajaran'),
                'prasyarat_dan_pengetahuan_awal' => $this->input->post('prasyarat_dan_pengetahuan_awal'),
                'kemampuan_akhir_yang_diharapkan' => $this->input->post('kemampuan_akhir_yang_diharapkan'),
                'indikator' => $this->input->post('indikator'),
                'bahan_kajian' => $this->input->post('bahan_kajian'),
                'metode_pembelajaran' => $this->input->post('metode_pembelajaran'),
                'metode_penilaian' => $this->input->post('metode_penilaian'),
                'bahan_ajar' => $this->input->post('bahan_ajar'),
                'tugas_aktivitas' => $this->input->post('tugas_aktivitas'),
                'kemampuan_akhir_yang_diharapkan_atau_evaluasi' => $this->input->post('kemampuan_akhir_yang_diharapkan_atau_evaluasi'),
                'waktu' => $this->input->post('waktu'),
                'bobot' => $this->input->post('bobot'),
                'kriteria_penilaian' => $this->input->post('kriteria_penilaian'),
                'indikator_penilaian' => $this->input->post('indikator_penilaian'),
                'referensi' => $this->input->post('referensi'),
                'minggu_atau_pertemuan' => $this->input->post('minggu_atau_pertemuan'),
                'kemampuan_akhir_yang_diharapkan_2' => $this->input->post('kemampuan_akhir_yang_diharapkan_2'),
                'indikator_2' => $this->input->post('indikator_2'),
                'topik_dan_subtopik' => $this->input->post('topik_dan_subtopik'),
                'aktifitas_dan_strategi_pembelajaran' => $this->input->post('aktifitas_dan_strategi_pembelajaran'),

            );

            $this->model_rps->update_data($data, 'tbl_rps');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data Berhasil Diupdate</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
            redirect('rps/');
        }
    }
    public function export($id)
    {
        $data['tittle'] = 'Export RPS';

        $where = array('id_rps' => $id);
        $data['metu'] = $this->model_rps->get_data_single($where)->result();
        $this->load->view('templates/header_rps',);
        $this->load->view('pdf_rps', $data);
        $this->load->view('templates/footer_rps');
        // $this->load->library('dompdf_gen');

        // $paper_size = 'A4';
        // $orientation = 'landscape';
        // $html = $this->output->get_output();
        // $this->dompdf->set_paper($paper_size, $orientation);

        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->deompdf->stream('pdf_rps', array('Attachment' => 0));
    }
    // public function print()
    // {
    //     $data['tittle'] = 'Print RPS';
    //     $data['cetak'] = $this->model_rps->get_data('tbl_rps')->result();
    //     $this->load->view('print_rps', $data,);
    // }
    // public function pdf()
    // {
    //     $this->load->library('dompdf_gen');

    //     $data['ngetokne'] = $this->model_rps->get_data('tbl_rps')->result();
    //     $this->load->view('pdf_rps', $data);

    //     $paper_size = 'A4';
    //     $orientation = 'landscape';
    //     $html = $this->output->get_output();
    //     $this->dompdf->set_paper($paper_size, $orientation);

    //     $this->dompdf->load_html($html);
    //     $this->dompdf->render($html);
    //     $this->dompdf->stream("cetak_rps.pdf", array('Attachment' => 0));
    // }

}
