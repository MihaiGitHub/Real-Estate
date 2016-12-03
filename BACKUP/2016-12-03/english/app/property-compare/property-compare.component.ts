// TODO SOMEDAY: Feature Componetized like CrisisCenter
import { Component, OnInit, OnDestroy } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { PropertyCompare, PropertycompareService }  from './property-compare.service';
import { Subscription } from 'rxjs/Subscription';

@Component({
  templateUrl: 'app/property-compare/property-compare.template.html'
})
export class PropertycompareComponent implements OnInit, OnDestroy {


  constructor(){
      console.log('property compare page')
      
                  System.import('assets/js/helper.js').then(function(){
                        System.import('assets/js/owl.carousel.min.js').then(function(){
                            System.import('assets/js/template.js').then(function(){
                                  System.import('assets/js/style-selector.js');
                            });
                        });
                   });
    };

}
