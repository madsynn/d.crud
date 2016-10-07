<?php

use Faker\Factory as Faker;
use App\Models\Dealer;
use App\Repositories\DealerRepository;

trait MakeDealerTrait
{
    /**
     * Create fake instance of Dealer and save it in database
     *
     * @param array $dealerFields
     * @return Dealer
     */
    public function makeDealer($dealerFields = [])
    {
        /** @var DealerRepository $dealerRepo */
        $dealerRepo = App::make(DealerRepository::class);
        $theme = $this->fakeDealerData($dealerFields);
        return $dealerRepo->create($theme);
    }

    /**
     * Get fake instance of Dealer
     *
     * @param array $dealerFields
     * @return Dealer
     */
    public function fakeDealer($dealerFields = [])
    {
        return new Dealer($this->fakeDealerData($dealerFields));
    }

    /**
     * Get fake data of Dealer
     *
     * @param array $postFields
     * @return array
     */
    public function fakeDealerData($dealerFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'dealer' => $fake->word,
            'contact_person' => $fake->word,
            'mobile' => $fake->word,
            'phone' => $fake->word,
            'hours_opening_mf' => $fake->word,
            'hours_closing_mf' => $fake->word,
            'hours_opening_sat' => $fake->word,
            'hours_closing_sat' => $fake->word,
            'hours_opening_sun' => $fake->word,
            'hours_closing_sun' => $fake->word,
            'company_phone' => $fake->word,
            'toll_free' => $fake->word,
            'public_email' => $fake->word,
            'support_email' => $fake->word,
            'location_id' => $fake->randomDigitNotNull
        ], $dealerFields);
    }
}
