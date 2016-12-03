import { Component } from 'angular2/core';
import { bootstrap } from 'angular2/platform/browser';

/** Nested Component */
import { routing } from 'app/routing';
//import { HomeComponent } from '/app/unprotected/home/home.component';
//import { SignupComponent } from 'app/unprotected/signup/signup.component';
//import { SignupService } from 'app/unprotected/signup/signup.service';

@NgModule({
	imports: [routing]
})

@Component({
  selector: 'my-app',
  directives: [HomeComponent],
 /* styles: [`
  h1 {
    color:#545454;
    background:#02A8F4;
    padding:15px;
    box-shadow:2px 2px 2px 0 rgba(0, 0, 0, 0.3);
  }
  `]*/ 
  template: '<home></home>'
  
})
export class AppComponent {
  componentName: 'AppComponent'
}
bootstrap(AppComponent)

