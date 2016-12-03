import { NgModule }       from '@angular/core';
import { BrowserModule }  from '@angular/platform-browser';
import { FormsModule }    from '@angular/forms';

import { AppComponent }       from './app.component';
import { routing,
         appRoutingProviders } from './app.routing';

import { HomeModule } from './home/home.module';
import { PropertydetailsModule } from './property-details/property-details.module';
import { PropertycompareModule } from './property-compare/property-compare.module';
import { AgentsModule } from './agents/agents.module';
import { AgentdetailsModule } from './agent-details/agent-details.module';
import { FaqModule } from './faq/faq.module';
import { ServicesModule } from './services/services.module';


import { LoginComponent } from './login.component';

import { DialogService }  from './dialog.service';

@NgModule({
  imports: [
    BrowserModule,
    FormsModule,
    routing,
    HomeModule,
    PropertydetailsModule,
    PropertycompareModule,
    AgentsModule,
    AgentdetailsModule,
    FaqModule,
    ServicesModule
  ],
  declarations: [
    AppComponent,
    LoginComponent
  ],
  providers: [
    appRoutingProviders,
    DialogService
  ],
  bootstrap: [ AppComponent ]
})
export class AppModule {
}