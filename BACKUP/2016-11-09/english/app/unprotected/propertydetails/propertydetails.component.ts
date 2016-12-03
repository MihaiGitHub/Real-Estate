import { Component } from 'angular2/core';

@Component({
  selector: 'property-details',
 /* providers : [SignupService],
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
  `] */
  templateUrl: 'app/unprotected/propertydetails/propertydetails.template.html'
})
export class HomeComponent {
  componentName: 'PropertydetailsComponent';

  /*
  //Assign 
  constructor(_signupService: SignupService) {
    //this.friends = _friendService.getFriends();
  }
  */
}

