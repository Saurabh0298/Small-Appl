import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ScreateComponent } from './screate/screate.component';
import { SlistComponent } from './slist/slist.component';
import { UpdateComponent } from './update/update.component';


const routes: Routes = [
  {
    path:"",
    component:SlistComponent
  },
  {
    path:"create",
    component:ScreateComponent
  },
  {
    path:"list",
    component:SlistComponent
  },
  {
    path:"update/:id",
    component:UpdateComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
