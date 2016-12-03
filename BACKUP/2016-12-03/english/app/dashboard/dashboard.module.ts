import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import { FormsModule }    from '@angular/forms';

import { PropertycompareComponent }    from './property-compare.component';

import { PropertycompareService } from './property-compare.service';

import { propertycompareRouting } from './property-compare.routing';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    propertycompareRouting
  ],
  declarations: [
    PropertycompareComponent
  ],
  providers: [
    PropertycompareService
  ]

})
export class PropertycompareModule {}

