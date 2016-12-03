import { Component } from '@angular/core';

import {FORM_DIRECTIVES, NgForm, FormBuilder, Control, ControlGroup} from '@angular/common';

/////////////////
import { Http, Response,Headers, RequestOptions,Header,set } from '@angular/http';
import { Observable } from 'rxjs/Rx';
////////////////

@Component({
  moduleId: module.id,
  selector: 'my-app',
  template: `
  <header id="main-header">
        <div id="header-top">
            <div class="header-top-content container">
                <!-- Language Switcher -->
                <ul id="language-switcher" class="list-inline">
                    <li><a href="../index.html">Pl</a></li>
                </ul>
                <!-- End of Language Switcher -->

                <!-- Login Links -->
				<ul id="login-boxes" class="list-inline">
					<li><a id="login-form-butt" href="assets/forms/login.html">Login</a><a id="login-form-butt" href="login-form">Login</a></li>
					<li><a id="register-form-butt" href="assets/forms/register.html">Register</a></li>
				</ul>
                <!-- End of Login Links -->
            </div>
        </div>
        <div class="main-header-cont container">
            <!-- Top Logo -->
            <div class="logo-main-box col-xs-6 col-sm-4 col-md-3">
                <span class="bold">Home</span>
                <span> S</span>
                <div class="logo"></div>
                <span>uare</span>
            </div>
            <!-- End of Top Logo -->
            <!-- Main Menu -->
            <div class="menu-container col-xs-6 col-sm-8 col-md-9">
                <!-- Main Menu -->
                <nav id="main-menu" class="hidden-xs hidden-sm">
                    <ul class="main-menu list-inline">
                        <li><span class="current"><a routerLink="/home" routerLinkActive="active">Home</a></span><!--
                            <ul>
                                <li><a href="index.html" class="current">Home - Map</a></li>
                                <li><a href="index-slider.html">Home - Slider</a></li>
								<li><a href="index-slider-1.html">Home - Slider V2</a></li>
                                <li><a href="index-map.html">Home - Map Only</a></li>
                                <li><a href="index-slider-fullscreen.html">Home - Full Screen Slider</a></li> 
                            </ul>-->
                        </li><!-- Menu items ( You can change the link and its text ) -->
                        <li><span><a routerLink="/property-details" routerLinkActive="active">Property Details</a></span><!-- Menu items with submenu ("has-sub-menu" class is the helper for your future uses) -->
                           <!-- <ul>
                                <li><a href="pages/property-listing-grid.html">Property Listings - Grid</a></li>
								<li><a href="pages/property-listing-sidebar.html">Property Listings - Grid &amp; Sidebar</a></li>
								<li><a href="pages/property-listing-rows.html">Property Listings - Rows</a></li>
								<li><a href="pages/property-listing-map.html">Property Listings - Map</a></li> 
								<li><a href="pages/property-details.html">Property Details</a></li>
                            </ul>-->
                        </li>
                        <li><a routerLink="/property-compare" routerLinkActive="active">Property Compare</a></li>
                        <li><span>Agents</span>
                            <ul>
                                <li><a routerLink="/agents" routerLinkActive="active">Agents Listing</a></li>
                                <li><a routerLink="/agent-details" routerLinkActive="active">Agent Details</a></li>
                            </ul>
                        </li><!--
                        <li><span>Gallery</span>
							<ul>
								<li><a href="pages/gallery-two-cols.html">Gallery - 2 Columns</a></li>
								<li><a href="pages/gallery-three-cols.html">Gallery - 3 Columns</a></li>
								<li><a href="pages/gallery-four-cols.html">Gallery - 4 Columns</a></li>
							</ul>
						</li>
                        <li><span>Blog</span>
                            <ul>
                                <li><a href="pages/blog.html">Blog - Right Sidebar</a></li>
                                <li><a href="pages/blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                                <li><a href="pages/blog-details.html">Single Post</a></li>
                            </ul>
                        </li> -->
						<li><span>Pages</span>
							<ul><!--
								<li><a href="pages/testimonials.html">Testimonials</a></li>
								<li><a href="pages/video-tour.html">Video Tour</a></li>
								<li><a href="pages/404.html">404</a></li> -->
								<li><a routerLink="/services" routerLinkActive="active">Services</a></li>
								<li><a routerLink="/faq" routerLinkActive="active">FAQ</a></li>
							</ul>
						</li>
                        <li><a href="pages/contact.html">Contact</a></li>
                    </ul>
                </nav>
                <!-- END of Main Menu -->

				<div id="main-menu-handle" class="hidden-md hidden-lg"><i class="fa fa-bars"></i></div><!-- Mobile Menu handle -->
        	<!--	<a id="submit-property-link" class="btn" href="pages/submit-property.html"><span>Submit Your Property</span></a>
			THIS TAKES YOU TO THE FORM WITH THE FORM ALREADY SET UP -->
            </div>
            <!-- End of Main Menu -->
 		</div>
		<div id="mobile-menu-container" class="hidden-md hidden-lg"></div>
	</header>
    <router-outlet></router-outlet>


<div id="register-form" class="register-form">
	<h2 class="hsq-heading type-2">Registration Form</h2>
    <form class="search-form" #f="ngForm" novalidate (ngSubmit)="save(f.value, f.valid)"><!-- Do Not remove the classes -->
        <div class="search-fields">
            <input name="email" [(ngModel)]="user.email" #email="ngModel" required minlength="5" type="email" placeholder="Email" /><!-- Email Field -->
			<small [hidden]="email.valid || (email.pristine && !f.submitted)" class="text-danger">
				Email is required (minimum 5 characters).
			</small>
		</div>
        <div class="search-fields">
            <input name="password" [(ngModel)]="user.password" #street="ngModel" required placeholder="Create Password" type="password"/><!-- Phone Field -->
        </div>
        <div class="terms-condition">
            <div class="hsq-checkbox check-box-container">
                <label for="terms">
                    <input type="checkbox" value="1" id="terms">
                    <span></span>
                    I am a landlord or industry professional
                </label>
            </div>
        </div>
        <div class="search-button-container">
			<button class="btn" type="submit">Submit</button><!-- Submit button -->
        </div>
    </form>
</div>
<div class="margin-20">
	<div>Form details:-</div>
	<pre>Is form valid?: <br>{{f.valid | json}}</pre>
	<pre>Is form submitted?: <br>{{f.submitted | json}}</pre>
	<pre>form value: <br>{{f.value | json}}</pre>
</div>
 `
})
export class AppComponent {

    public user: User;
  
    ngOnInit() {
        this.user = {
        name: '',
            address: {
            street: '',
            postcode: '8000'
        }
        };
    }
    
    save(model: User, isValid: boolean) {
        console.log(model, isValid);



            return this._http
                .post('https://g3.penguindata.com/rest/v2/Test/Log',body,options)
                .map(res => res.json())
                .catch(this.handleError);
    }
    ////////////////////////////////////////
  //     let value = new Penguin();
  //  value.username = username;
  //  value.email = email;
  //  let body = JSON.stringify(value);
  //  let headers = new Headers({ 'Content-Type': 'application/json'});
  //  let options = new RequestOptions({ headers: headers });
    




    /*
  public user: User;
  
  ngOnInit() {
    this.user = {
      name: '',
        address: {
         street: '',
         postcode: '8000'
      }
    };
  }
  
  save(model: User, isValid: boolean) {
    console.log(model, isValid);
  }
  */
  
}