<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Sim extends TwiML {
    /**
     * Sim constructor.
     * 
     * @param sid $simSid SIM SID
     */
    public function __construct($simSid) {
        parent::__construct('Sim', $simSid);
    }
}