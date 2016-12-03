// TODO SOMEDAY: Feature Componetized like CrisisCenter
import { Component, OnInit, OnDestroy } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { Home, HomeService }  from './home.service';
import { Subscription }       from 'rxjs/Subscription';

@Component({
  templateUrl: 'app/home/home.template.html',
})






export class HomeComponent implements OnInit, OnDestroy {

    constructor(){
console.log('maps page')

jQuery('#login-form-butt, #register-form-butt').magnificPopup({
					type: 'ajax',
					removalDelay: 600,
					mainClass: 'mfp-fade'
				});

//                  System.import('assets/js/helper.js').then(function(){
       //                 System.import('assets/js/select2.min.js').then(function(){
       //                     System.import('assets/js/ion.rangeSlider.min.js').then(function(){
       //                           System.import('assets/js/owl.carousel.min.js').then(function(){
 //                                       System.import('assets/js/template.js');
      //                            });
      //                      });
     //                   });
      //             });
      
/*        System.import('https://maps.googleapis.com/maps/api/js?libraries=places&language=pl&region=PL');
      System.import('assets/js/infobox_packed.js');
        System.import('assets/js/richmarker-compiled.js');
        System.import('assets/js/markerclusterer_packed.js');
        System.import('assets/js/data.json');
        */
    };

  /*
  heroes: Home[];

  private selectedId: number;
  private sub: Subscription;

  constructor(
    private service: HomeService,
    private route: ActivatedRoute,
    private router: Router) {}

  ngOnInit() {
    this.sub = this.route
      .params
      .subscribe(params => {
        this.selectedId = +params['id'];
        this.service.getHeroes()
          .then(heroes => this.heroes = heroes);
      });
  }

  ngOnDestroy() {
    this.sub.unsubscribe();
  }

  isSelected(hero: Hero) { return hero.id === this.selectedId; }

  onSelect(hero: Hero) {
    this.router.navigate(['/hero', hero.id]);
  }
  */

}


/*
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
*/