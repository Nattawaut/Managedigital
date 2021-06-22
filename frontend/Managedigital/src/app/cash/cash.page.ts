import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Router } from '@angular/router';
import { AlertController, MenuController, NavController } from '@ionic/angular';
import { Observable } from 'rxjs';
import { ApiService } from '../api.service';
@Component({
  selector: 'app-cash',
  templateUrl: './cash.page.html',
  styleUrls: ['./cash.page.scss'],
})
export class CashPage implements OnInit {
  userid: number;
  logindata: any = {};
  Username: any;
  date: any;
  statuscash: any;
  firstname:any;
  lastname:any;
  room:any;
  current: any;
  bath: any;
  dataitem: any;
  id: any;
  poersonal: any;
  datatest: any;
  volt:any;


  constructor(public _apiService: ApiService,
    public navurl: NavController,
    public navctrl: NavController,
    public http: HttpClient,
    public router: Router,
    public alertController: AlertController,
    public menuCtrl: MenuController,) { }

  ngOnInit() {
    this.id = this._apiService.datapast
    this.dataitem = this.id
    console.log(this.dataitem)
  }
  

  async login(msg: string) {
    const alert = await this.alertController.create({
      /*  header: 'แจ้งเตือน', */
      subHeader: '',
      message: msg,
      buttons: ['OK']
    });
    await alert.present();
  }


  showuser() {
    let url: string = "http://localhost/Meterdigital/backend/getbill.php?userid="+this.dataitem.userid;
    let logdata = new FormData();
    // console.log(JSON.stringify(logindata))
    let data: Observable<any> = this.http.post(url, logdata);
    data.subscribe(res => {
      if (res != null) {
        let datapersonal = res[0]; {
          this.userid = datapersonal.userid;
          this.firstname = datapersonal.firstname;
          this.volt = datapersonal.volt;
          this.current = datapersonal.current;
          console.log("หน่วยไฟ",this.volt);
        }
        this._apiService.datapast = datapersonal;
      }
      console.log(res);
    });
  }

  
 


  
}
