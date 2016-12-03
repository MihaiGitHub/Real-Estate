import { NgModule }       from '@angular/core';
import { CommonModule }   from '@angular/common';
import { FormsModule }    from '@angular/forms';

import { AgentdetailsComponent }    from './agent-details.component';

import { AgentdetailsService } from './agent-details.service';

import { agentdetailsRouting } from './agent-details.routing';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    agentdetailsRouting
  ],
  declarations: [
    AgentdetailsComponent
  ],
  providers: [
    AgentdetailsService
  ]
})
export class AgentdetailsModule {}

