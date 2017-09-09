import { Injectable } from '@angular/core';
import {Homework} from "./homework";

@Injectable()
export class HomeworkService {

  private homework: Homework[];

  constructor() {
    this.homework = [];
    this.homework.push(new Homework("S. 52, Aufgabe 3", "Deutsch"));
    this.homework.push(new Homework("S. 64, Aufgabe 9", "Mathe"));
    this.homework.push(new Homework("Das planck'sche Wirkungsquantum herleiten.", "Physik"));
  }

  public getHomework(): Promise<Homework[]> {
    return new Promise((resolve, reject) => {
      resolve(this.homework);
    });
  }

  public deleteHomework(homework: Homework) {
    let index = this.homework.indexOf(homework, 0);
    if (index > -1) {
      this.homework.splice(index, 1);
    }
    return;
  }

  public addHomework(homework: Homework) {
    this.homework.push(homework);
    return;
  }

}
