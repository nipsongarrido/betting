<?php 

class EquiposController extends BaseController {

	public function getLista()
	{
		$url = "http://www.fantasyfootballnerd.com/service/schedule/xml/dv8qf84239ij/";
		if (($response_xml_data = file_get_contents($url))===false){
		    echo "Error fetching XML\n";
		} else {
		   libxml_use_internal_errors(true);
		   $xml = simplexml_load_string($response_xml_data);
		   if (!$xml) {
		       echo "Error loading XML\n";
		       foreach(libxml_get_errors() as $error) {
		           echo "\t", $error->message;
		       }
		   } else {
		   	  // echo "<pre>";
		      // print_r($xml->Games->Game[0]['awayTeam']);
		      // echo "</pre>";
		   }
		}
		$data["partidos"] =[];
		foreach ($xml->Games->Game as $game) {
			$data["partidos"][] = 
			[
				"fecha" => $game['gameDate'],
				"local" => $game['homeTeam'],
				"visita" => $game['awayTeam'],
				"img_local" => "http://prod.static.packers.clubs.nfl.com/nfl-assets/img/gbl-ico-team/".$game['homeTeam']."/logos/home/large.png",
				"img_visita" => "http://prod.static.49ers.clubs.nfl.com/nfl-assets/img/gbl-ico-team/".$game['awayTeam']."/logos/home/large.png", 
				"hora" => $game['gameTimeET']
			];
		}
		

		/*$data["partidos"] = [
			[
				"fecha" => "2014-09-01",
				"local" => "GB",
				"visita" => "SF",
				"img_local" => "http://prod.static.packers.clubs.nfl.com/nfl-assets/img/gbl-ico-team/GB/logos/home/large.png",
				"img_visita" => "http://prod.static.49ers.clubs.nfl.com/nfl-assets/img/gbl-ico-team/SF/logos/home/large.png", 
				"hora" => "1:00"
			],
			[
				"fecha" => "2014-09-01",
				"local" => "GB",
				"visita" => "SF",
				"img_local" => "http://prod.static.packers.clubs.nfl.com/nfl-assets/img/gbl-ico-team/GB/logos/home/large.png",
				"img_visita" => "http://prod.static.49ers.clubs.nfl.com/nfl-assets/img/gbl-ico-team/SF/logos/home/large.png", 
				"hora" => "1:00"
			],
			[
				"fecha" => "2014-09-01",
				"local" => "GB",
				"visita" => "SF",
				"img_local" => "http://prod.static.packers.clubs.nfl.com/nfl-assets/img/gbl-ico-team/GB/logos/home/large.png",
				"img_visita" => "http://prod.static.49ers.clubs.nfl.com/nfl-assets/img/gbl-ico-team/SF/logos/home/large.png", 
				"hora" => "1:00"
			],
		];*/


		return View::make("equipos.lista", $data);

	}
}	