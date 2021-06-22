import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { AlertController, NavController } from '@ionic/angular';
import { ApiService } from '../api.service';
import { Router } from '@angular/router';


@Component({
  selector: 'app-listmeter',
  templateUrl: './listmeter.page.html',
  styleUrls: ['./listmeter.page.scss'],
})
export class ListmeterPage implements OnInit {
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
    public router: Router,) 
              {
               }

  ngOnInit() {
    
    this.id = this._apiService.datapast
    this.dataitem = this.id
  }

}
