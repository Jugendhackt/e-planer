import { TestBed, inject } from '@angular/core/testing';

import { HomeworkServiceService } from './homework.service';

describe('HomeworkServiceService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [HomeworkServiceService]
    });
  });

  it('should be created', inject([HomeworkServiceService], (service: HomeworkServiceService) => {
    expect(service).toBeTruthy();
  }));
});
