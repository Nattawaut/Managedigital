import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  dataitem: any;
  public datapast:any;
  constructor(public http: HttpClient) { }
  
  Updateuser(datatest,firstname,lastname,tel,email,Password){
    console.log("servicetest",datatest,firstname)
    /* console.log("http://localhost/Meterdigital/backend/getSinglestudent.php?userid="+datatest+"&firstname="+firstname) */
    return this.http.get("http://localhost/Meterdigital/backend/getedituser.php?userid="+datatest+"&firstname="+firstname+"&lastname="+lastname+"&tel="+tel + "&email="+email+"&Password="+Password);
    /*'http://localhost/php-ionic/backend/updateStudent.php?id='+id,data */
    /* http://localhost/Meterdigital/backend/getSinglestudent.php?userid=88&firstname=zxc */ 
  }


}
