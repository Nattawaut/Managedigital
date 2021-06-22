import { Chart } from 'chart.js';
import { ViewChild } from '@angular/core';
import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';



@Component({
  selector: 'app-chart',
  templateUrl: './chart.page.html',
  styleUrls: ['./chart.page.scss'],
})
export class ChartPage implements OnInit {
  @ViewChild('barChart') barChart;
  @ViewChild('hrzBarChart6') hrzBarChart6;
  bars: any;
  apiData: any;
  hrzBars6: any;
  colorArray: any;

  constructor(private http: HttpClient) { }

  ionViewDidEnter() {
    this.createHrzBarChart6()
  }

  ngOnInit() {
  }
  
  createHrzBarChart6() {
    const my_url = 'http://localhost/Meterdigital/backend/getmeter1.php';
    let ctx = this.hrzBarChart6.nativeElement
    ctx.height = 400;
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
        labels: this.apiData && this.apiData[45].power ,
      
        
        datasets: [{
          label: 'ปริมาณค่ไฟที่ใช้',
          data: this.apiData && this.apiData[3].current,
          backgroundColor: 'rgba(0,0,0,0)',
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
