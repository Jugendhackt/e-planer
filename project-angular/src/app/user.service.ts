import { Injectable } from '@angular/core';
import { environment } from '../environments/environment';
import axios from 'axios';

@Injectable()
export class UserService {

  public isAuthenticated: Boolean;

  constructor() { }

  public login(email: String, password: String) {
    return new Promise((resolve, reject) => {
      axios.post(environment.eplanerApiServer + '/login', {
        email: email,
        password: password,
      }).then((response) => {
        console.log(response.data);
        resolve(response.data);
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
