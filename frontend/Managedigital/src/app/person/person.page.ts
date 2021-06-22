import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { AlertController, NavController } from '@ionic/angular';
import { ApiService } from '../api.service';
import { IonInfiniteScroll } from '@ionic/angular';
@Component({
  selector: 'app-person',
  templateUrl: './person.page.html',
  styleUrls: ['./person.page.scss'],
})
export class PersonPage implements OnInit {
  dataitem: any;
  id:any;
  poersonal:any;
  constructor(public alertController: AlertController,
              private _apiService: ApiService,
              public http: HttpClient,
              public navctrl: NavController,) 
              {
               }

  ngOnInit() {
    
    this.id = this._apiService.datapast
    this.dataitem = this.id
  }

  
  async logoutt(msg: string) {
    const alert = await this.alertController.create({
      /*  header: 'แจ้งเตือน', */
      subHeader: '',
      message: msg,
      buttons: ['OK']
    });
    await alert.present();
  }
  logout() {
    this.logoutt("ยืนยัน")
  }
}
