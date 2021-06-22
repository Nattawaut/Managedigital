import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AlertController, MenuController, NavController } from '@ionic/angular';
import { Observable } from 'rxjs';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {
  userid: number;
  logindata: any = {};


  constructor(public _apiService: ApiService,
    public navurl: NavController,
    public navctrl: NavController,
    public http: HttpClient,
    public router: Router,
    public alertController: AlertController,
    public menuCtrl: MenuController,) { }

  ngOnInit() {
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


  submit() {
    if (this.logindata.Username != "" && this.logindata.Password != "") {
      console.log("Username", this.logindata.Username);
      console.log("Password", this.logindata.Password);
      let url: string = "http://localhost/Meterdigital/backend/loginapp.php";
      let logdata = new FormData();
      logdata.append('Username', this.logindata.Username);
      logdata.append('Password', this.logindata.Password);
      // console.log(JSON.stringify(logindata))
      let data: Observable<any> = this.http.post(url, logdata);
      data.subscribe(res => {
        if (res != null) {
          let datapersonal = {
            userid: res[0].userid,
            firstname : res[0].firstname,
            lastname :res[0].lastname,
            email:res[0].email,
            tel:res[0].tel,
            Password:res[0].Password,
          }
          this._apiService.datapast = datapersonal;
          /* this._apiService.datapast = res[0].userid; */
          /* this.router.navigateByUrl('/index'); */
          /* this.router.navigate(['/personal', {userid:this.userid }]); */
          this.router.navigateByUrl('/index');
        }
        console.log(res);
      });
    } else {
      console.log(this.userid);
      this.login("กรุณากรอก Username Password");
    }
  }

}
