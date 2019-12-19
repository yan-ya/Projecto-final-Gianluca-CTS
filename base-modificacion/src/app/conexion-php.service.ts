import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class ConexionPhpService {
  url='http://localhost/www/Proyecto_final/base_de_datos/Impresion';
  constructor(private http: HttpClient) { }
  recuperarTodo(){
    return this.http.get(`${this.url}/abm/traer_datos.php`);
  }
  alta(elemento){
    return this.http.post(`${this.url}/abm/agregar_elemento.php`,JSON.stringify(elemento));
  }
  seleccionar(id_elemento:number) {
    return this.http.get(`${this.url}/abm/seleccionar.php?id_sustancia=${id_elemento}`);
  }
  modificacion(elemento) {
    return this.http.post(`${this.url}/abm/modificacion.php`, JSON.stringify(elemento));    
  } 
  baja(codigo:number) {
    return this.http.get(`${this.url}/abm/baja.php?codigo=${codigo}`);
  }
  fin_ciclo(){
    return this.http.post(`${this.url}/abm/finalizar_ciclo.php`,1);  
  }
}
