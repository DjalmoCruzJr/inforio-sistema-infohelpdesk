<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chamado_Model extends CI_Model {
	
	public function get($hel_pk_seq_cha) {
		$this->db->from('heltbcha');
		$this->db->where('hel_pk_seq_cha', $hel_pk_seq_cha, FALSE);
		return $this->db->get()->first_row();
	}
	
	public function getContatoChamado($hel_pk_seq_con) {
		$this->db->from('heltbcha');
		$this->db->where('hel_seqconde_cha', $hel_pk_seq_con, FALSE);
		return $this->db->get()->result();
	}
	
	public function getContatoChamado2($hel_pk_seq_con) {
		$this->db->from('heltbcha');
		$this->db->where('hel_seqconpara_cha', $hel_pk_seq_con, FALSE);
		return $this->db->get()->result();
	}
	
	public function getEmpresaContatoChamado($hel_pk_seq_exc) {
		$this->db->from('heltbcha');
		$this->db->where('hel_seqexc_cha', $hel_pk_seq_exc, FALSE);
		return $this->db->get()->result();
	}
	
	public function getChamado($hel_pk_seq_con = NULL) {
		$this->db->from('heltbcha');
		$this->db->join('heltbexc','hel_pk_seq_exc = hel_seqexc_cha','LEFT');
		$this->db->join('heltbcon','hel_pk_seq_con = hel_seqcon_exc','LEFT');		
		$this->db->join('heltbemp','hel_pk_seq_emp = hel_seqemp_exc','LEFT');
		if (!empty($hel_pk_seq_con)){
			$this->db->where('hel_seqcon_exc', $hel_pk_seq_con, FALSE);
		}
		$this->db->order_by("hel_pk_seq_cha", "asc");
		return $this->db->get()->result();
	}
	
	public function getChamadosAbertoEmpresa($hel_seqexc_ios) {
		$this->db->from('heltbcha');
		$this->db->where('hel_seqexc_cha', $hel_seqexc_ios, FALSE);
		$this->db->where('hel_status_cha <> ', CHAMADO_ATIVO, FALSE);
		return $this->db->get()->result();
	}
	
	public function insert($chamado) {
		$res = $this->db->insert('heltbcha', $chamado);
	
		if ($res) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}
	
	public function update($chamado, $hel_pk_seq_cha) {
		$this->db->where('hel_pk_seq_cha', $hel_pk_seq_cha, FALSE);
		$res = $this->db->update('heltbcha', $chamado);
	
		if ($res) {
			return $hel_pk_seq_cha;
		} else {
			return FALSE;
		}
	}
	
	public function delete($hel_pk_seq_cha) {
		$this->db->where('hel_pk_seq_cha', $hel_pk_seq_cha, FALSE);
		return $this->db->delete('heltbcha');
	}
		
}