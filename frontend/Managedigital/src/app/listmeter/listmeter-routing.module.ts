import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ListmeterPage } from './listmeter.page';

const routes: Routes = [
  {
    path: '',
    component: ListmeterPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ListmeterPageRoutingModule {}
