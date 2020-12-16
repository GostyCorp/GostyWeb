import { Component } from '@angular/core';

@Component(
    {
        selector: 'app-root',
        templateUrl: './app.component.html',
        styleUrls: ['./app.component.css']
    }
)

export class AppComponent
{
    title = 'lolyApp';
    cachecache = 'cyan';
    updateTitle()
    {
        if (this.title != "Rambo")
        {
            this.title = "Rambo";
            this.cachecache = 'red';
        }
        else
        {
            this.title = "LolyApp";
            this.cachecache = 'cyan';
        }
    }
}
