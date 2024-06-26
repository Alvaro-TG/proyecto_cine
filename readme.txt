
POSIBLE NUEVA IMPLEMENTACIÓN EN LA WEB DE CINE:
Por Alvaro Toande   Fecha:  26/06/2024


Mi aportación a la web es que, una vez que buscamos una película, sea cual sea, nos aparezca la Ficha de la misma y, de igual modo que aparece la imagen del Poster de la peli, aparezca el Trailer de Youtube en dicha ficha.
Ese trailer, como es lógico, lo buscará automáticamente la API por nosotros.
Por ejemplo:


El proceso que he seguido es el siguiente:

Para combinar el código actual que tenemos en ficha.php con el código necesario para buscar y mostrar el tráiler de la película, seguí estos pasos:
 
1.	Añadí la función obtener_trailer en el archivo modelos/api.php para mantener la lógica relacionada con las API en un solo lugar.
 

2.	Modifiqué el archivo ficha.php para utilizar la función obtener_trailer: Incluí la llamada a esta función y pasé la URL del tráiler a la vista, para que busque el trailer en Youtube:

 


3.	Actualicé la vista ficha.htm para incluir el iframe del tráiler, añadiendo el código HTML necesario para mostrar el tráiler.		
 	
NOTA:  
En la función obtener_trailer, dentro de la API, hay una API Key que obtuve con mi cuenta de Google, pero que es funcional para todo el mundo. 
El proceso para obtenerla es el siguiente:

Crear una cuenta de Google y obtener una clave API de YouTube
1.	Visita el Google Cloud Console.
2.	Crea un nuevo proyecto.
3.	Habilita la API de YouTube Data v3 para tu proyecto.
4.	Genera una clave API para este proyecto.




