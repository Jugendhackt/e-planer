import { Injectable } from '@angular/core';
import { environment } from '../environments/environment';
import axios from 'axios';

@Injectable()
export class UserServiceService {

  public isAuthenticated: Boolean;

  constructor() { }

  public login(email: String, password: String) {
    axios.post(environment.eplanerApiServer + '/api/login', {
      email: email,
      password: password,
    }).then((response) => {
      console.log(response.data);
    });
  }
}
