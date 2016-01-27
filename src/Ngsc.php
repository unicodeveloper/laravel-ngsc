<?php

namespace Unicodeveloper\Ngsc;

use GuzzleHttp\Client;

class Ngsc {

    /**
     * Instance of GuzzleHttp
     * @var object
     */
    protected $client;

    /**
     * Data response
     * @var object
     */
    protected $response;
    /**
     * Devcenter States and Cities API
     * Source: http://states-cities.devcenter.co/
     * @var string
     */

    protected $baseUrl = 'http://states-cities.devcenter.co/api/v1';

    public function __construct()
    {
        $this->setRequestOptions();
    }

    /**
     * Set options for making the Client request
     * @return  void
     */
    private function setRequestOptions()
    {
        $this->client = new Client(['base_uri' => $this->baseUrl]);
    }

    /**
     * Make the client request and get the response
     * @param string $relativeUrl
     * @return  void
     */
    public function setResponse($relativeUrl)
    {
        $this->response = $this->client->get($this->baseUrl . $relativeUrl, []);
    }

    /**
     * Get an associative array of all the states and their cities
     * @return array
     */
    public function getAllStates()
    {
        $this->setResponse('/states');

        return $this->data();
    }

    /**
     * Get the details of a state
     * @param  string $state
     * @return array
     */
    public function getOneState($state)
    {
        $this->setResponse("/state/{$state}");

        return $this->data();
    }

    /**
     * Get the local government areas of a particular state
     * @param  string $state
     * @return array
     */
    public function getLGAS($state)
    {
        $this->setResponse("/state/{$state}/lgas");

        return $this->data();
    }

    /**
     * Get all the cities of a particular state
     * @param  string $state
     * @return array
     */
    public function getCities($state)
    {
        $this->setResponse("/state/{$state}/cities");

        return $this->data();
    }

    /**
     *  Get the details of the required request
     * @return object
     */
    private function data()
    {
        $result = json_decode($this->response->getBody());

        $simplifiedResult = [];

        if (is_array($result)) {
            foreach ($result as $key => $value) {
                $simplifiedResult[$key] = (array)$value;
            }

            return $simplifiedResult;
        }

        return (array)$result;
    }
}