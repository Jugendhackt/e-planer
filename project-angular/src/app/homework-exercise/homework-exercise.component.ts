import {Component, ElementRef, Input, OnInit} from '@angular/core';
import {Homework} from "../homework";
import {AnimationBuilder, AnimationService} from "css-animator";
import {HomeworkService} from "../homework.service";

@Component({
  selector: 'app-homework-exercise',
  templateUrl: './homework-exercise.component.html',
  styleUrls: ['./homework-exercise.component.css'],
})
export class HomeworkExerciseComponent implements OnInit {

  @Input() homework: Homework;
  private animator: AnimationBuilder;

  constructor(private elementRef: ElementRef, private animationService: AnimationService, private homeworkService: HomeworkService) {
    this.animator = animationService.builder();
  }

  ngOnInit() {
  }

  done() {
    this.animator.setType('hinge').show(this.elementRef.nativeElement);

    setTimeout(() => {
      this.homeworkService.deleteHomework(this.homework);
    }, 1000);
  }

}
