import { Component, OnInit } from '@angular/core';
import {UserService} from "../user.service";
import {Router} from "@angular/router";

@Component({
  selector: 'app-login-page',
  templateUrl: './login-page.component.html',
  styleUrls: ['./login-page.component.css']
})
export class LoginPageComponent implements OnInit {

  private email: String;
  private password: String;
  private running: Boolean;

  constructor(private userService: UserService, private router: Router) { }

  ngOnInit() {
    if (this.userService.isAuthenticated) {
      this.router.navigate(['/dashboard']);
    }
  }

  login() {
    if (!this.running) {
      this.running = true;
      this.userService.login(this.email, this.password).then((res) => {
        this.router.navigate(['/dashboard']);
        this.running = false;
      }).catch((e) => {
        console.error(e);
        this.running = false;
      });
    }
  }

}
