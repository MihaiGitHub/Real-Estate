import { Component } from 'angular2/core';
import { SignupService } from 'app/unprotected/signup/signup.service';

@Component({
  selector: 'sign-up',
  providers : [SignupService],
  styles: [`
  div { 
     background-color:#EFEFEF;
     margin-bottom:15px;
     padding:15px;
     border:1px solid #DDD;
     box-shadow:2px 2px 2px 0 rgba(0, 0, 0, 0.3);
    border-radius:3px;
  }
  h2 { 
    text-align: center;
  }
  `]
  template: `
  <h2>Hello from the {{componentName}}!</h2>
  `
})
export class SignupComponent {
  componentName: 'SignupComponent';
  //Assign 
  constructor(_signupService: SignupService) {
    //this.friends = _friendService.getFriends();
  }
}

