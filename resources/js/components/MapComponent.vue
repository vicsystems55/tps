<template>


<GmapMap ref="mapRef"
  :center="{lat:10, lng:10}"
  :zoom="7"
  map-type-id="hybrid"
  style="min-height: 500px"
>
  <GmapMarker
   :options="{
   zoomControl: true,
   mapTypeControl: true,
   scaleControl: false,
   streetViewControl: true,
   rotateControl: false,
   fullscreenControl: true,
   disableDefaultUi: false
 }"
    :key="index"
    v-for="(m, index) in markers"
    :position="m.position"
    :clickable="true"
    :draggable="true"
    @click="center=m.position"
  />





    
</GmapMap>
         
   
</template>

<script>

import VModal from 'vue-js-modal'

import Vue from 'vue'

import * as VueGoogleMaps from 'vue2-google-maps'

import {gmapApi} from 'vue2-google-maps'



Vue.use(VModal)

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyBvRJFvJDwqyb-WGgLbkXrkz7Dvqi11Df0',
    libraries: 'visualization', // This is required if you use the Autocomplete plugin
    // OR: libraries: 'places,drawing'
    // OR: libraries: 'places,drawing,visualization'
    // (as you require)
 
    //// If you want to set the version, you can do so:
    // v: '3.26',
  },
 
  //// If you intend to programmatically custom event listener code
  //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
  //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
  //// you might need to turn this on.
  // autobindAllEvents: false,
 
  //// If you want to manually install components, e.g.
  //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
  //// Vue.component('GmapMarker', GmapMarker)
  //// then disable the following:
  installComponents: true,
})


    export default {

   

        data() {
            return {
                account_maps: [],
                key: '',
                my_maps: [],
                markers: [
                  {position: 
                    { lat: 12.74836, lng: 11.91998 }, 
                  icon:{
                    url: 'https://cdn-icons.flaticon.com/png/512/3743/premium/3743809.png?token=exp=1637248430~hmac=23bf85b6524b1108a2428f3ac0e1bd54',
                    }
                  }
                  
                  ]
                  
            }
        },



          props: ['appurl', 'listingcode'],

        methods: {
   

        },


        computed: {
                google: gmapApi
            },


        mounted() {
            
            console.log('Component mounted.');

                this.$refs.mapRef.$mapPromise.then((map) => {
                map.panTo(
                    {
                        lat: 11.995910, 
                        lng: 8.550320,
                        
                        })
                })

                this.$refs.mapRef.$mapPromise.then((map) => {
                map.panTo({lat: 11.989630, lng: 8.534080})
                })
  
           
        }
    }
</script>
