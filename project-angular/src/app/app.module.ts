import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule} from "@angular/forms";

import { AppComponent } from './app.component';
import { NavigationBarComponent } from './navigation-bar/navigation-bar.component';
import { RouterModule, Routes } from "@angular/router";
import { PageNotFoundComponent } from './page-not-found/page-not-found.component';
import { LoginPageComponent } from './login-page/login-page.component';
import { DashboardComponent } from './dashboard/dashboard.component';
import {UserService} from "./user.service";
import {IsAuthenticated} from "./is-authenticated";

const appRoutes: Routes = [
    {
        path: 'dashboard',
        component: DashboardComponent,
        data: { title: 'Index' },
        canActivate: [IsAuthenticated]
    },
    {
        path: 'login',
        component: LoginPageComponent
    },
    { path: '',
        redirectTo: '/login',
        pathMatch: 'full'
    },
    { path: '**', component: PageNotFoundComponent }
];

@NgModule({
  declarations: [
    AppComponent,
    NavigationBarComponent,
    PageNotFoundComponent,
    DashboardComponent,
    LoginPageComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(
      appRoutes, {
        enableTracing: true
      }
    ),
    FormsModule
  ],
  providers: [UserService, IsAuthenticated],
  bootstrap: [AppComponent]
})
export class AppModule { }
