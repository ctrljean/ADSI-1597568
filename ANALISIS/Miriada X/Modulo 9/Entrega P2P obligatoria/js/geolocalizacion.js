var map, lat, lng;
var lati,latf,lngi,lngf;
var ubicaciones;
 
$(function(){
  function guardaUbicaciones(){
    console.log(ubicaciones);
    localStorage.ubicaciones = JSON.stringify(ubicaciones);
  }
  function cargaUbicaciones(){
            if (localStorage.ubicaciones) {
               try {
                    // Al fallar el parse la página no carga el mapa
                    ubicaciones = JSON.parse(localStorage.ubicaciones);
               } 
               catch (e) {
                           ubicaciones = new Array();
               }
            } 
            else  {
                    ubicaciones = new Array();
            }
      }
      
      function muestraUbicaciones() {
           var punto, punto_anterior;
               for (var i = 0; i < ubicaciones.length; i++) 
                   {
                     if (ubicaciones[i]) 
                        {
                          punto = ubicaciones[i];
                          map.addMarker({ lat: punto[0], lng: punto[1] });
                          if (punto_anterior) {
                                                map.drawRoute({ origin: [punto_anterior[0], punto_anterior[1]],
                                                                destination: [punto[0], punto[1]],
                                                                travelMode: 'driving',
                                                                strokeColor: '#990066',                                                                
                                                                strokeOpacity: 0.5,
                                                                strokeWeight: 5
                                                              });
                                              }
                            punto_anterior = punto;
                        }
                    }
                if (punto) {
                             lat = punto[0];
                             lng = punto[1];
                           }
      }

      function enlazarMarcador(e){

       // muestra ruta entre marcas anteriores y actuales
        map.drawRoute({
          origin: [lat, lng],  // origen en coordenadas anteriores
          // destino en coordenadas del click o toque actual
          destination: [e.latLng.lat(), e.latLng.lng()],
          travelMode: 'driving',
          strokeColor: '#ff0000',
          strokeOpacity: 0.5,
          strokeWeight: 5
        });


        lat = e.latLng.lat();   // guarda coords para marca siguiente
        lng = e.latLng.lng();

        map.addMarker({ lat: lat, lng: lng});  // pone marcador en mapa
        ubicaciones.push ([lat, lng]);
      };

      $(window).bind("beforeunload", function() { guardaUbicaciones(); });  // Registrar Ubicaciones antes de salir
      $(".BtnInicializar").on('click',  function() { 
                                                  var respuesta = confirm("¿Quiere Borrar la Ruta Trazada e Iniciar una Nueva ? ")
                                                  if (respuesta===true) 
                                                     {
                                                        if (ubicaciones.length > 1) 
                                                            {
                                                              ubicaciones = new Array();
                                                              localStorage.ubicaciones = JSON.stringify(ubicaciones);
                                                              geolocalizar();
                                                            }
                                                        else{
                                                              alert("No se Puede Inicializar la Ruta Trazada, se requiere Minimo 2 Puntos");
                                                            }   
                                                     }
                                                });
      $(".BtnCompactar").on('click',  function()   { 
                                                  var respuesta = confirm("¿Quiere Compactar Ruta Trazada, solo queda Inicio y Fin de Ruta ? ")
                                                  if (respuesta===true) 
                                                     {
                                                         if (ubicaciones.length > 2) 
                                                            {
                                                              lati = ubicaciones[0][0];                      // Carga la primera ubicacion que esta guardada
                                                              lngi = ubicaciones[0][1];
                                                              latf = ubicaciones[ubicaciones.length-1][0];   // Carga la ultima ubicacion que esta guardada
                                                              lngf = ubicaciones[ubicaciones.length-1][1];
                                                              ubicaciones = new Array();
                                                              localStorage.ubicaciones = JSON.stringify(ubicaciones);
                                                              ubicaciones.push ([lati, lngi]);
                                                              map = new GMaps({  // muestra mapa centrado en coords [lat, lng]
                                                                                el: '#map',
                                                                                lat: lati,
                                                                                lng: lngi,
                                                                                click: enlazarMarcador,
                                                                                tap: enlazarMarcador
                                                                              });
                                                              map.addMarker({ lat: lati, lng: lngi});
                                                              ubicaciones.push ([latf, lngf]);
                                                              map.addMarker({ lat: latf, lng: lngf});
                                                              muestraUbicaciones();
                                                            }
                                                        else{
                                                              alert("No se Puede Compactar la Ruta Trazada, se requiere Minimo 3 Puntos");
                                                            }   
                                                      }
                                                });
      function geolocalizar(){
        GMaps.geolocate({
          success: function(position){
                    cargaUbicaciones();    
                    if (ubicaciones.length > 0) 
                         {
                           lat = ubicaciones[0][0];            // Carga la primera ubicacion que esta guardada
                           lng = ubicaciones[0][1];
                         } 
                    else {
                           lat = position.coords.latitude;    // Posiciones actuales de lat y lng
                           lng = position.coords.longitude;
                           ubicaciones.push ([lat, lng]);
                         }
                    map = new GMaps({  // muestra mapa centrado en coords [lat, lng]
                      el: '#map',
                      lat: lat,
                      lng: lng,
                      click: enlazarMarcador,
                      tap: enlazarMarcador
                    });
                    map.addMarker({ lat: lat, lng: lng});  // marcador en [lat, lng]
                    muestraUbicaciones();
                  },
          error: function(error) { 
                    alert('La Geolocalización falló, habilite la seguridad del Navegador,  sale el siguiente Error: '+error.message); 
                  },
          not_supported: function(){ 
                    alert("Su Navegador No Soporta Geolocalización"); 
                  },
        });
      };

      geolocalizar();
    });