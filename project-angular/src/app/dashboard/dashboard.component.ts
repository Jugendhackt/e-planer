import { Component, OnInit } from '@angular/core';
import {IsAuthenticated} from "../is-authenticated";
import {Homework} from "../homework";
import {HomeworkService} from "../homework.service";

@Component({
    selector: 'app-dashboard',
    templateUrl: './dashboard.component.html',
    styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {
    public latestHomework: Homework;

    constructor(private homeworkService: HomeworkService) {
      this.latestHomework = null;
    }

    ngOnInit () {
      this.homeworkService.getHomework().then((homeworks) => {
        if (homeworks && homeworks.length > 0) {
          this.latestHomework = homeworks[0];
        } else {
          this.latestHomework = null;
        }
      });
    }
}
