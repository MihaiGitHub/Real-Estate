import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import { FormsModule }    from '@angular/forms';

import { PropertydetailsComponent }    from './property-details.component';

import { PropertydetailsService } from './property-details.service';

import { propertydetailsRouting } from './property-details.routing';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    propertydetailsRouting
  ],
  declarations: [
    PropertydetailsComponent,
 //  HeroDetailComponent
  ],
  providers: [
    PropertydetailsService
  ]

})
export class PropertydetailsModule {}


/*
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/