import { Component } from '@angular/core';
@Component({
  selector: 'app-root',
  templateUrl: 'app.component.html',
  styleUrls: ['app.component.scss'],
})
export class AppComponent {
  public appPages = [
    { title: 'หน้าแรก', url: './index', icon: 'home' },
    { title: 'เกี่ยวกับ', url: './person', icon: 'person' },
   /*  { title: 'ตั้งค่า', url: './history', icon: 'settings' }, */
    { title: 'ออกจากระบบ', url: './welcome', icon: 'power' },
  ];
}
