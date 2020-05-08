<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    private $id;
    private $uid;
    private $detailUrl;
    private $importId;
    private $hasChanges;
    private $car;
    private $yearOfProduction;
    private $titleShort;
    private $horsepower;
    private $cubicCapacity;
    private $manufacturerCode;
    private $steering;
    private $cylinder;
    private $gearbox;
    private $gears;
    private $gearType;
    private $frontBrakes;
    private $rearBrakes;
    private $doors;
    private $fuel;
    private $firstRegistrationDate;
    private $numberOfPreviousOwner;
    private $chassisNumber;
    private $engineNumber;
    private $gearboxNumber;
    private $matchingNumbers;
    private $replica;
    private $converted;
    private $colorOutside;
    private $colorInside;
    private $manufacturerColorNameOutside;
    private $manufacturerColorNameInside;
    private $interiorMaterial;
    private $sunroof;
    private $electricWindows;
    private $foldingRoof;
    private $centralLocking;
    private $airbag;
    private $heatedSeats;
    private $abs;
    private $airconditioning;
    private $powerSteering;
    private $cruiseControl;
    private $price;
    private $priceCurrency;
    private $priceOnRequest;
    private $mileageUnit;
    private $mileageByUnit;
    private $vatReclaimable;
    private $location;
    private $standardImages;
    private $damageImages;
    private $restorationImages;
    private $embeddedVideoCode;
    private $description;
    private $stateCategory;
    private $extras;
    private $report;
    private $starsEngine;
    private $starsTechnik;
    private $starsPaint;
    private $starsInterior;
    private $licensed;
    private $readyToRide;
    private $milleMiglia;
    private $mainInspection;
    private $oldtimerLicensePlate;
    private $fiva;
    private $fia;
    private $accidentFree;
    private $mainInspectionUntil;
    private $files;
    private $contact;
    private $status;
    private $locale;
    private $datePublished;
    private $updatedAt;

    public function __construct(object $o)
    {
        foreach($o as $k => $v) {
            $this->$k = $v;
        }
    }

    public function getData(string $key) {
        return $this->$key;
    }

}