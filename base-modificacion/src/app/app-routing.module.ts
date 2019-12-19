import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ImprimirComponent } from './imprimir/imprimir.component';
import { EditorComponent } from './editor/editor.component';


const routes: Routes = [
  { path: 'imprimir', component: ImprimirComponent },
    {
    path: 'imprimir',
    component: ImprimirComponent,
    data: { title: 'impresion' }
  },
  {path: 'editor',
    component: EditorComponent,
    data: { title: 'editor' }
  },
  { path: '',
    redirectTo: '/editor',
    pathMatch: 'full'
  },
  ];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
