<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand\Assistant\Intent;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class IntentActionsOptions {
    /**
     * @param array $actions The actions
     * @return UpdateIntentActionsOptions Options builder
     */
    public static function update($actions = Values::NONE) {
        return new UpdateIntentActionsOptions($actions);
    }
}

class UpdateIntentActionsOptions extends Options {
    /**
     * @param array $actions The actions
     */
    public function __construct($actions = Values::NONE) {
        $this->options['actions'] = $actions;
    }

    /**
     * The actions
     * 
     * @param array $actions The actions
     * @return $this Fluent Builder
     */
    public function setActions($actions) {
        $this->options['actions'] = $actions;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Preview.Understand.UpdateIntentActionsOptions ' . implode(' ', $options) . ']';
    }
}