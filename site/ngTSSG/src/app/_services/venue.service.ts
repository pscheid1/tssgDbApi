import { Injectable } from '@angular/core';
import {
  HttpClient,
  HttpErrorResponse,
  HttpResponse
} from '@angular/common/http';
import { Venue } from 'src/app/_models/Venue';
import { environment } from 'src/environments/environment';

@Injectable({
  providedIn: 'root'
})

export class VenueService {
  private uri: string;
  constructor(private http: HttpClient) {
    this.uri = environment.TSSGAPIURL + ':' + environment.TSSGAPIPORT + '/venues';
   }


  private extractData(res: HttpResponse<Venue>) {
    const body = res;
    return body || {};
  }

  private handleErrorPromise (error: HttpErrorResponse | any) {
    return Promise.reject(error.message || error);
  }

  async addVenue(obj: Venue){
    return await this.http.post(`${this.uri}/add`, obj)
    .toPromise()
    .then(this.extractData)
    .catch(this.handleErrorPromise);
  }

  // request all venues from the node server
  getVenues() {
    return this.http.get(`${this.uri}`);
  }

  // request a list of current venue id's
  listVenues() {
    return this.http.get(`${this.uri}/venues`);
  }

  // send edit request to the node server. called from venue-get.component.html
  // via app-routing.module.ts path match for 'venue/edit/:_id'
  editVenue(_id) {
    // console.log('venue.service.editVenue: _id = ' + _id);
    return this
            .http
            .get(`${this.uri}/edit/` + _id);
            // .get(this.uri + '/edit/' + _id);
    }

  deleteVenue(_id) {
    return this.http.get(`${this.uri}/delete/${_id}`);
  }

  async updateVenue(obj: Venue) {
    // obj._id = '5d0516139da64c4facd357fb';
    // console.log('venue.service.updateVenue: _id = ' + obj._id);
    return await this.http.post(`${this.uri}/update/`, obj)
    .toPromise()
    .then(this.extractData)
    .catch(this.handleErrorPromise);
  }
}
