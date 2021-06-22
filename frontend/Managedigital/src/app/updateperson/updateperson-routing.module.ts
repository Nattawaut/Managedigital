import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { UpdatepersonPage } from './updateperson.page';

const routes: Routes = [
  {
    path: '',
    component: UpdatepersonPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class UpdatepersonPageRoutingModule {}
