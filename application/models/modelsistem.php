<?php 

Class modelsistem extends CI_Model{

    public function simpan_db(){

        $config['upload_path'] = './assets';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size'] = '2048000';
        $config['file_name'] = url_title($this->input->post('gambar'));
        $filename = $this->upload->file_name;
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');
        $data = $this->upload->data();

        $data = array(
            'id_petugas' => $this->input->post('id_petugas'),
            'nama_petugas' => $this->input->post('nama_petugas'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'telp' => $this->input->post('telp'),
            'level' => $this->input->post('level'),
            

            // 'nik' => "",
            // 'nama' => $this->input->post('nama'),
            // 'username' => $this->input->post('username'),
            // 'password' => $this->md5($this->input->post('password')),
            // 'no_telp' => $this->input->post('telepon'),
            // // 'image' => $data['file_name']
        );
        $this->db->insert('petugas',$data);
        // echo "data berhasil disimpan";
        // header("Location:".base_url().'Dashboard/');
    }

    public function get_petugas(){
        $data = $this->db->get('petugas');
        return $data->result();
    }

    public function count_petugas(){
        $data = $this->db->get('petugas');
        return $data->num_rows();
    }

}
?>
