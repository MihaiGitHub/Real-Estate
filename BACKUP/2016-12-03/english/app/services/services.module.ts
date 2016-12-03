import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import { FormsModule }    from '@angular/forms';

import { ServicesComponent }    from './services.component';

import { ServicesService } from './services.service';

import { servicesRouting } from './services.routing';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    servicesRouting
  ],
  declarations: [
    ServicesComponent
  ],
  providers: [
    ServicesService
  ]

})
export class ServicesModule {}

