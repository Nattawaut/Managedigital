import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { UpdatepersonPageRoutingModule } from './updateperson-routing.module';

import { UpdatepersonPage } from './updateperson.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    UpdatepersonPageRoutingModule
  ],
  declarations: [UpdatepersonPage]
})
export class UpdatepersonPageModule {}
