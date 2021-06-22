import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ListmeterPageRoutingModule } from './listmeter-routing.module';

import { ListmeterPage } from './listmeter.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ListmeterPageRoutingModule
  ],
  declarations: [ListmeterPage]
})
export class ListmeterPageModule {}
