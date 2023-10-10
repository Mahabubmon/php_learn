<?php 
class Facade{

    public function findApartments(){
        $apfinder  = new ApartmentFinder();
        $geolocator = new GeoLocator();
        $gmap       = new GoolgeMap();

       $apartments =  $apfinder->locateApartments($place);
        foreach ($apertments as $apertments){
            $location[] = $geolocator->getLocations($apertments);
        }
        $gmap->initialize();
        $gmap->dreawLocation($location);
        $gmap->dispatch($divId);

    }
}
    
?>