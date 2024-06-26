<?php


	function acceso_api($url){

		$url = str_replace(' ', '%20', $url);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		$data = curl_exec($curl);
		curl_close($curl);
		$data_convertido = json_decode($data, true);
		return $data_convertido;
	
	}
	

	function datos_recurso($ficha){

		$datos = acceso_api("https://www.omdbapi.com/?apikey=fe8a7565&i=$ficha");
		return $datos;

	}

	
	function listado_recursos($titulo, $year, $tipo){
		
		$datos = acceso_api("https://www.omdbapi.com/?apikey=fe8a7565&s=$titulo&y=$year&type=$tipo");
		return $datos;
		
	}
	
	
	function obtener_trailer($titulo) {
		$apiKey = 'AIzaSyDwy43tsrZO6-RVuu1eDV09dyRyRPUUyGI'; // Reemplaza esto con tu clave API de YouTube
		$query = urlencode($titulo . ' trailer');
		$url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=$query&type=video&key=$apiKey";
		
		$response = file_get_contents($url);
		$data = json_decode($response, true);
		
		if (!empty($data['items'])) {
			return 'https://www.youtube.com/embed/' . $data['items'][0]['id']['videoId'];
		}
		return null;
	}	



?>