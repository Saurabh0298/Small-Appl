import { Component, OnInit } from '@angular/core';
import { StudentService } from '../services/student.service';
import { Student } from '../classes/student';


@Component({
  selector: 'app-slist',
  templateUrl: './slist.component.html',
  styleUrls: ['./slist.component.css']
})
export class SlistComponent implements OnInit {

stud_list:Student[] = [];
  constructor( private stud:StudentService) { }

  ngOnInit() {

      this.stud_list=this.stud.getAll();
  }

  delete(pos){
    if(this.stud.s_delete(pos)==true)
    {
      alert("Student Deleted Succussfully..!");
    }
  }

}
