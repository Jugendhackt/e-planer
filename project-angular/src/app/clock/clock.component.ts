import {Component, OnDestroy, OnInit} from '@angular/core';

@Component({
  selector: 'app-clock',
  templateUrl: './clock.component.html',
  styleUrls: ['./clock.component.css']
})
export class ClockComponent implements OnInit, OnDestroy {
    private _hours: number;
    private _minutes: number;
    public hours: String;
    public minutes: String;
    private date: Date;
    private subscription;
    constructor() {
        this.date = new Date();
        this._hours = this.date.getHours();
        this._minutes = this.date.getMinutes();
    }

    public hoursUpdate() {
      if (this._hours > 9) {
        this.hours = this._hours + "";
      } else {
        this.hours =  "0" + this._hours;
      }
    }

    public minutesUpdate() {
      if (this._minutes > 9) {
        this.minutes = this._minutes + "";
      } else {
        this.minutes = "0" + this._minutes;
      }
    }

    ngOnInit() {
        this.subscription = setInterval(() => {
            this.date = new Date();
            this._hours = this.date.getHours();
            this._minutes = this.date.getMinutes();
            this.minutesUpdate();
            this.hoursUpdate();
        }, 1000);
    }

    ngOnDestroy(): void {
        clearInterval(this.subscription);
    }
}
