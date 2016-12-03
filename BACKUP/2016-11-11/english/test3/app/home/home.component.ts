// TODO SOMEDAY: Feature Componetized like CrisisCenter
import { Component, OnInit, OnDestroy } from '@angular/core';
import { Router, ActivatedRoute } from '@angular/router';

import { Home, HomeService }  from './home.service';
import { Subscription }       from 'rxjs/Subscription';

@Component({
  templateUrl: 'app/home/home.template.html'
})
export class HomeComponent implements OnInit, OnDestroy {



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