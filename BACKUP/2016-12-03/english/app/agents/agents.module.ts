import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import { FormsModule }    from '@angular/forms';

import { AgentsComponent }    from './agents.component';

import { AgentsService } from './agents.service';

import { agentsRouting } from './agents.routing';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    agentsRouting
  ],
  declarations: [
    AgentsComponent
  ],
  providers: [
    AgentsService
  ]

})
export class AgentsModule {}

