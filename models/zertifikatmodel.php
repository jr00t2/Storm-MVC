<?php
class ZertifikatModel extends Model {
	public function getTeilnehmer () {
		$sql = "SELECT * FROM tx_schulungstit_domain_model_anmeldung
					LEFT JOIN
					tx_schulungstit_domain_model_schulung
					ON
					(class_u_i_d = class_Number)";
		$this->_setSql($sql);
		$teilnehmer = $this->getAll();
		if (empty($teilnehmer))
        {
            return false;
        }
         
        return $teilnehmer;
	}
	public function getTeilnehmerByDate($date) {
		$sql = "SELECT * FROM tx_schulungstit_domain_model_anmeldung
					LEFT JOIN
					tx_schulungstit_domain_model_schulung
					ON
					(class_u_i_d = class_Number) WHERE `date` LIKE '$date%'";
		$this->_setSql($sql);
		$teilnehmer = $this->getAll();
		if (empty($teilnehmer))
        {
            return false;
        }
         
        return $teilnehmer;	
	}
}