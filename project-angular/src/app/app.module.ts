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
import { ClockComponent } from './clock/clock.component';
import { HomeworkExerciseComponent } from './homework-exercise/homework-exercise.component';
import { HomeworkComponent } from './homework/homework.component';
import {HomeworkService} from "./homework.service";
import {AnimatorModule} from "css-animator";
import { HomeworkCreateModalComponent } from './homework-create-modal/homework-create-modal.component';

const appRoutes: Routes = [
    {
        path: 'dashboard',
        component: DashboardComponent,
        data: { title: 'Index' },
        canActivate: [IsAuthenticated]
    },
    {
        path: 'homework',
        canActivate: [IsAuthenticated],
        component: HomeworkComponent
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
    LoginPageComponent,
    ClockComponent,
    HomeworkExerciseComponent,
    HomeworkComponent,
    HomeworkCreateModalComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(
      appRoutes, {
        enableTracing: true
      }
    ),
    FormsModule,
    AnimatorModule
  ],
  providers: [UserService, IsAuthenticated, HomeworkService],
  bootstrap: [AppComponent]
})
export class AppModule { }
