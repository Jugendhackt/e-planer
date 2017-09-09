import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HomeworkExerciseComponent } from './homework-exercise.component';

describe('HomeworkExerciseComponent', () => {
  let component: HomeworkExerciseComponent;
  let fixture: ComponentFixture<HomeworkExerciseComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HomeworkExerciseComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HomeworkExerciseComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
