import { Component } from 'angular2/core';
//import { SignupService } from 'app/unprotected/signup/signup.service';


/* map will need to be modified anyway so wait
http://playcode.org/angular-2-typescript-google-maps/

import {MapsAPILoader, NoOpMapsAPILoader, MouseEvent,
  ANGULAR2_GOOGLE_MAPS_PROVIDERS,
  ANGULAR2_GOOGLE_MAPS_DIRECTIVES} from 'angular2-google-maps/core';
import * as mapTypes from 'angular2-google-maps/services/google-maps-types';
*/

@Component({
  selector: 'home',
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
  templateUrl: 'app/unprotected/home/home.template.html'
})
export class HomeComponent {
  componentName: 'HomeComponent';

  /*
  //Assign 
  constructor(_signupService: SignupService) {
    //this.friends = _friendService.getFriends();
  }
  */
}

