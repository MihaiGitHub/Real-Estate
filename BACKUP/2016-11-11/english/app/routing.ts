import { Routes, RouterModule } from "@angular/router";
import { HomeComponent } from "app/unprotected/home/home.component";
import { PropertydetailsComponent } from "app/unprotected/propertydetails/propertydetails.component";

const APP_ROUTES; Routes = [
	{ path: '', component: HomeComponent },
	{ path: 'property-details', component: PropertydetailsComponent }
];

export const routing = RouterModule.forRoot();