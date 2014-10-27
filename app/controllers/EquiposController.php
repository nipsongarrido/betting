<?php 

class EquiposController extends BaseController {

	public function getLista()
	{

			$data["partidos"] = [
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
			];


		return View::make("equipos.lista", $data);

	}
}	