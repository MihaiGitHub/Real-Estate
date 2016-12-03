// TODO SOMEDAY: Feature Componetized like CrisisCenter
import { Component, OnInit, OnDestroy } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { Agents, AgentsService }  from './agents.service';
import { Subscription } from 'rxjs/Subscription';

@Component({
  templateUrl: 'app/agents/agents.template.html'
})
export class AgentsComponent implements OnInit, OnDestroy {



}
