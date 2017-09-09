import { Injectable } from '@angular/core';
import { environment } from '../environments/environment';
import axios from 'axios';
import { User } from "./user";
import {Router} from "@angular/router";

@Injectable()
export class UserService {

  public isAuthenticated: Boolean;
  public user: User;

  constructor(private router: Router) {
    this.checkLoginStatus();
  }

  private checkLoginStatus() {
    axios.get(environment.eplanerApiServer + '/api/user', {withCredentials: true}).then((response) => {
      this.isAuthenticated = true;
      this.user = new User(response.data.user, response.data.roles);
      this.router.navigate(['/dashboard']);
    }).catch((e) => {

    });
  }

  public login(email: String, password: String) {
    return new Promise((resolve, reject) => {
      axios.post(environment.eplanerApiServer + '/login', {
        email: email,
        password: password,
      }).then((response) => {
        this.isAuthenticated = true;
        this.user = new User(response.data.user, response.data.roles);
        resolve(this.user);
      }).catch((e) => {
        if (e.response.status === 422) {
          resolve(e.response.data);
        } else {
          reject(e);
        }
      });
    });
  }
}
