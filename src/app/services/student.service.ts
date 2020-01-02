import { Injectable } from '@angular/core';
import { Student } from '../classes/student';

@Injectable({
  providedIn: 'root'
})
export class StudentService {

  stud_list:Student[]=[
    {
      s_id:1,
      s_name:"mayur",
      s_email:"mayur@gmail.com",
      s_mobile:123456,
      s_course:"mcs"
    }
  ];
  constructor() { }

  getAll()
  {
    console.log("fetched..!");
    return this.stud_list;
  }

  s_add(stud:Student)
  {
    this.stud_list.push(stud);
    return true;
  }

  s_update(stud:Student,pos:number)
  {
    this.stud_list[pos]=stud;
    return true;
  }
  s_delete(pos:number)
  {
    this.stud_list.splice(pos,1);
    return true;
  }

}
