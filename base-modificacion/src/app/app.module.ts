import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { AppComponent } from './app.component';
import { HttpClientModule } from '@angular/common/http';
import { AppRoutingModule } from './app-routing.module';
import { RouterModule, Routes } from '@angular/router';
import { ImprimirComponent } from './imprimir/imprimir.component';
import { EditorComponent } from './editor/editor.component';
import { CommonModule } from '@angular/common';  



@NgModule({
  declarations: [
    AppComponent,
    ImprimirComponent,
    EditorComponent,
   
   
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule,
    FormsModule,
    HttpClientModule,
    CommonModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
