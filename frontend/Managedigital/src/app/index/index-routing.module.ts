import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { IndexPage } from './index.page';

const routes: Routes = [
  {
    path: '',
    component: IndexPage,
    children:[
      {
        path: 'index2',
        loadChildren: () => import('../index2/index2.module').then( m => m.Index2PageModule)
      },
      {
        path: 'cash',
        loadChildren: () => import('../cash/cash.module').then(m => m.CashPageModule)
      },
      {
        path: 'history',
        loadChildren: () => import('../history/history.module').then(m => m.HistoryPageModule)
      },
      {
        path: 'person',
        loadChildren: () => import('../person/person.module').then(m => m.PersonPageModule)
      },
      {
        path: 'welcome',
        loadChildren: () => import('../welcome/welcome.module').then( m => m.WelcomePageModule)
      },
      {
        path: 'updateperson',
        loadChildren: () => import('../updateperson/updateperson.module').then( m => m.UpdatepersonPageModule)
      }
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class IndexPageRoutingModule {}
