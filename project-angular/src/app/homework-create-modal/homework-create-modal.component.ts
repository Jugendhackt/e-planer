import { Component, OnInit } from '@angular/core';
import {HomeworkService} from "../homework.service";
import {Homework} from "../homework";
declare var $:any;

@Component({
  selector: 'app-homework-create-modal',
  templateUrl: './homework-create-modal.component.html',
  styleUrls: ['./homework-create-modal.component.css']
})
export class HomeworkCreateModalComponent implements OnInit {

  private subjects: String[];

  // FORM
  private subject: String;
  private description: String;

  constructor(private homeworkService: HomeworkService) {
    this.subjects = ['Informatik', 'Deutsch', 'Englisch', 'Französisch', 'Spanisch', 'Chinesisch', 'Hebräisch', 'Griechisch', 'Latein', 'Mathematik', 'Physik', 'Chemie', 'Physik+X', 'Biologie', 'BioChemie', 'Musik', 'Erdkunde', 'Geschichte', 'Sozialwissenschaften', 'Politik', 'Kunst', 'Philosophie', 'Katholische Religion', 'Evangelische Religion', 'Pädagogik'];
  }

  ngOnInit() {
  }

  addHomework() {
    this.homeworkService.addHomework(new Homework(this.description, this.subject));
    this.description = "";
    this.subject = "";
  }

}
