<?php

class Schools_model extends Model {

	public function getSchools($lang){
		$countrylangaux = "";
		if($lang == ""){
			$countrylangaux = "_en";
		}else{
			$countrylangaux = $lang;
		}
		$result = $this->query('
			select a.foto, c.name'.$countrylangaux.' as country, b.`code'.$lang.'` as cod, a.`name`, a.coordinator, a.address, a.website, a.facebook, a.instagram, a.email1, a.telefone1, a.telefone2, a.lat, a.lng
			 from mission_schools a, organizations b, tb_country c
			 where 
				a.id_field = b.idorg and
	            a.id_field = b.idorg and
	            b.country = c.id_country;
			');
		return $result;
	}

	public function getSchoolsByUnion($lang, $union){
		$countrylangaux = "";
		if($lang == ""){
			$countrylangaux = "_en";
		}else{
			$countrylangaux = $lang;
		}
		$result = $this->query('
			select a.foto, c.name'.$countrylangaux.' as country, b.`code'.$lang.'` as cod, a.`name`, a.coordinator, a.address, a.website, a.facebook, a.instagram, a.email1, a.telefone1, a.telefone2, a.lat, a.lng
			 from mission_schools a, organizations b, tb_country c
			 where 
				a.id_field = b.idorg and
	            a.id_field = b.idorg and
	            b.country = c.id_country and b.`code` = "'.$union.'";
			');
		return $result;
	}

	public function getEmail($union){
		switch($union){
			case 'ARGU': return 'rosita.ciuffardi@adventistas.org.ar';
			case 'BLUM': return 'rosa.nacif@adventistas.org.bo';
			case 'CBUC': return 'tania.paschalis@adventistas.org.br';
			case 'CLUM': return 'patricio.figueroa@adventistas.cl';
			case 'EABR': return 'leandro.lins@adventistas.org.br';
			case 'ECDU': return 'maria.mulki@adventistas.ec';
			case 'NBUM': return 'elizabeth.nascimento@adventistas.org';
			case 'NPEU': return 'francesco@upeu.edu.pe';
			case 'NEBUM': return 'talita@adventistas.org.br';
			case 'NWBR': return 'missoes.noroeste@adventistas.org.br';
			case 'PARU': return 'vanessa.monteiro@adventistas.org';
			case 'SBUC': return 'secretaria.usb@adventistas.org';
			case 'SPEU': return 'eli.arteaga@adventistas.org.pe';
			case 'EBUC': return 'suellen.costa@adventistas.org';
			case 'URUU': return 'secretaria.uu@adventistas.org.uy';
			case 'WCBU': return 'nayara.oliveira@adventistas.org';
			case 'FLKI': return 'voluntarios@adventistas.org';
			case 'DSA': return 'voluntarios@adventistas.org';
		}
	}
}

?>