import {Component, OnDestroy, OnInit} from '@angular/core';

@Component({
  selector: 'app-clock',
  templateUrl: './clock.component.html',
  styleUrls: ['./clock.component.css']
})
export class ClockComponent implements OnInit, OnDestroy {
    public hours: number;
    public minutes: number;
    private date: Date;
    private subscription;
    constructor() {
        this.date = new Date();
        this.hours = this.date.getHours();
        this.minutes = this.date.getMinutes();
    }

    ngOnInit() {
        this.subscription = setInterval(() => {
            this.date = new Date();
            this.hours = this.date.getHours();
            this.minutes = this.date.getMinutes();
        }, 1000);
    }

    ngOnDestroy(): void {
        clearInterval(this.subscription);
    }
}
