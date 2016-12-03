import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import { FormsModule }    from '@angular/forms';

import { HomeComponent }    from './home.component';
//import { HeroDetailComponent }  from './hero-detail.component';

import { HomeService } from './home.service';

import { homeRouting } from './home.routing';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    homeRouting
  ],
  declarations: [
    HomeComponent,
 //  HeroDetailComponent
  ],
  providers: [
    HomeService
  ]

})
export class HomeModule {}


/*
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/