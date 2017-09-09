import { Component, OnInit } from '@angular/core';
import {HomeworkService} from "../homework.service";
import {Homework} from "../homework";

@Component({
  selector: 'app-homework',
  templateUrl: './homework.component.html',
  styleUrls: ['./homework.component.css']
})
export class HomeworkComponent implements OnInit {

  private homeworks: Homework[];

  constructor(private homeworkService: HomeworkService) { }

  ngOnInit() {
    this.homeworkService.getHomework().then((__homeworks) => {this.homeworks = __homeworks;});
  }

}
