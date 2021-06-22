import { HttpClient } from '@angular/common/http';
import { Component, OnInit, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { AlertController, MenuController, NavController } from '@ionic/angular';
import { Chart } from 'chart.js';
import { Observable } from 'rxjs';
import { ApiService } from '../api.service';


@Component({
  selector: 'app-index',
  templateUrl: './index.page.html',
  styleUrls: ['./index.page.scss'],
})
export class IndexPage implements OnInit {
  userid: number;
  logindata: any = {};
  volt: any;
  power: any;
  current: any;
  bath: any;
  @ViewChild('barChart') barChart;
  @ViewChild('hrzBarChart6') hrzBarChart6;
  bars: any;
  apiData: any;
  hrzBars6: any;
  colorArray: any;

  constructor(public menuCtrl: MenuController, private http: HttpClient,
    public _apiService: ApiService,
    public navurl: NavController,
    public navctrl: NavController,
    public router: Router,
    public alertController: AlertController,) {
    this.menuCtrl.enable(true);
  }

  ngOnInit() {
  }

  /* ionViewDidEnter() {
    this.createHrzBarChart6()

  } */


  showuser() {
    let url: string = "http://localhost/Meterdigital/backend/getmeter1.php";
    let logdata = new FormData();
    // console.log(JSON.stringify(logindata))
    let data: Observable<any> = this.http.post(url, logdata);
    data.subscribe(res => {
      if (res != null) {
        let datapersonal = res[0]; {
          this.volt = datapersonal.volt;
          this.power = datapersonal.power;
          this.current = datapersonal.current;
          this.bath = datapersonal.bath;
           if (datapersonal.statuscash = 1){
             datapersonal.statuscash = "จ่ายแล้ว"
           }
           else{
             datapersonal.statuscash = "ค้างชำระ"
           }
        }
        this._apiService.datapast = datapersonal;
      }
      console.log(res);
    });
  }


  createHrzBarChart6() {
    const my_url = 'http://localhost/Meterdigital/backend/getmeter1.php';
    
    let ctx = this.hrzBarChart6.nativeElement
    ctx.height = 350;
    this.http.get(my_url).subscribe(data => {
      console.log(data);
      this.apiData = data;
      setTimeout(() => {
        this.createHrzBarChart6();
      }, 5000);
    })
    this.hrzBars6 = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: this.apiData && this.apiData[25].date,
        datasets: [{
          label: 'ปริมาณค่ไฟที่ใช้',
          data: this.apiData && this.apiData[30].power + this.apiData[52].current,
         /*  backgroundColor: 'rgba(38, 194, 129)', */
          borderColor: 'rgb(38, 194, 129)',// array should have same number of elements as number of dataset
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            },
            stacked: true
          }]
        }
      }
    });
  }
}
