import {Component, Input, OnInit} from '@angular/core';

@Component({
  selector: 'app-homework-exercise',
  templateUrl: './homework-exercise.component.html',
  styleUrls: ['./homework-exercise.component.css'],
})
export class HomeworkExerciseComponent implements OnInit {
  @Input() title: string;
  @Input() description: string;
  constructor() { }

  ngOnInit() {
  }

}
