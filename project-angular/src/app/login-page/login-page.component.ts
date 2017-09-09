import { Component, OnInit } from '@angular/core';
import {UserService} from "../user.service";

@Component({
  selector: 'app-login-page',
  templateUrl: './login-page.component.html',
  styleUrls: ['./login-page.component.css']
})
export class LoginPageComponent implements OnInit {

  private email: String;
  private password: String;

  constructor(private userService: UserService) { }

  ngOnInit() {
  }

  login() {
    this.userService.login(this.email, this.password);
  }

}
