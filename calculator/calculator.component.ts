import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-calculator',
  templateUrl: './calculator.component.html',
  styleUrls: ['./calculator.component.css']
})
export class CalculatorComponent implements OnInit {

  alignc="center";
  txt="";
  temp="";
  optr="";
  result;
  constructor() { }

  ngOnInit() {
  }

  set(num)
  {
    this.txt +=num;
  }
  backs()
  {
    
  }
  clear()
  {
    this.txt="0";
  }

  clearall()
  {
    this.txt="";
    this.temp="";
  }

  operation(optr)
  {
    this.optr=optr;
    this.temp=this.txt;
    this.txt="";
  }

  solution(optr)
  {
    switch(this.optr)
    {
      case '+' :  this.result = Number(this.temp) + Number(this.txt);break;
      case '-' :  this.result = Number(this.temp) - Number(this.txt);break;
      case '*' :  this.result = Number(this.temp) * Number(this.txt);break;
      case '/' :  this.result = Number(this.temp) / Number(this.txt);break;
      case '%' :  this.result = Number(this.temp) % Number(this.txt);break;
    }
    
    this.txt = this.result.toString();
  }

}
