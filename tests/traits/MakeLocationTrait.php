<?php

use Faker\Factory as Faker;
use App\Models\Location;
use App\Repositories\LocationRepository;

trait MakeLocationTrait
{
    /**
     * Create fake instance of Location and save it in database
     *
     * @param array $locationFields
     * @return Location
     */
    public function makeLocation($locationFields = [])
    {
        /** @var LocationRepository $locationRepo */
        $locationRepo = App::make(LocationRepository::class);
        $theme = $this->fakeLocationData($locationFields);
        return $locationRepo->create($theme);
    }

    /**
     * Get fake instance of Location
     *
     * @param array $locationFields
     * @return Location
     */
    public function fakeLocation($locationFields = [])
    {
        return new Location($this->fakeLocationData($locationFields));
    }

    /**
     * Get fake data of Location
     *
     * @param array $postFields
     * @return array
     */
    public function fakeLocationData($locationFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'location_type' => $fake->word,
            'nickname' => $fake->word,
            'address' => $fake->word,
            'street' => $fake->word,
            'street_additional' => $fake->word,
            'city' => $fake->word,
            'state' => $fake->word,
            'country' => $fake->word,
            'zipcode' => $fake->word,
            'latitude' => $fake->word,
            'longitude' => $fake->word,
            'filter_class' => $fake->word
        ], $locationFields);
    }
}
