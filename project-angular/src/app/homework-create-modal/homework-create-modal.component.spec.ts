import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { HomeworkCreateModalComponent } from './homework-create-modal.component';

describe('HomeworkCreateModalComponent', () => {
  let component: HomeworkCreateModalComponent;
  let fixture: ComponentFixture<HomeworkCreateModalComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ HomeworkCreateModalComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(HomeworkCreateModalComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
