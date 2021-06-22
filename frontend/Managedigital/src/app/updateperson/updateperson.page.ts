import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-updateperson',
  templateUrl: './updateperson.page.html',
  styleUrls: ['./updateperson.page.scss'],
})
export class UpdatepersonPage implements OnInit {
  dataitem: any;
  id: any;
  poersonal: any;
  firstname: any;
  lastname: any;
  datatest: any;
  constructor(private _apiService: ApiService,
    private route: ActivatedRoute,
    private router: Router,) { }

  ngOnInit() {
    this.id = this._apiService.datapast
    this.dataitem = this.id
  }

  Updateuser() {
    console.log(this.dataitem.firstname,this.dataitem.lastname)
    let datatest = {usertest: this.id,}
    console.log("test", datatest)
    console.log("test1",this.datatest.userid.userid)
    console.log("SUCCESS", datatest.usertest.firstname);
    this._apiService.Updateuser(datatest.usertest.userid,
                                datatest.usertest.firstname,
                                datatest.usertest.lastname,
                                datatest.usertest.tel,
                                datatest.usertest.email,
                                datatest.usertest.Password,).subscribe((dataitem: any) => {
                                  this.router.navigateByUrl('/index');
      
    }, (error: any) => {
      console.log("ERROR",);
    })
  }
}
