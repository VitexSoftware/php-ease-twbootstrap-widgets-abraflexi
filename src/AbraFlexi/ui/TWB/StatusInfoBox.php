<?php

/**
 * AbraFlexi Bricks
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 */

namespace AbraFlexi\ui\TWB;

/**
 * AbraFlexi connection status widget
 */
class StatusInfoBox extends \AbraFlexi\Company {

    use \Ease\Glue;

    /**
     * AbraFlexi Status
     * @var array
     */
    public $info = [];

    /**
     * Try to connect to AbraFlexi
     *
     * @param string|array $init    company dbNazev or initial data
     * @param array        $options Connection settings override
     */
    public function __construct($init = null, $properites = []) {
        parent::__construct($init, $properites);
        $infoRaw = $this->getFlexiData();
        if (!empty($infoRaw) && !array_key_exists('success', $infoRaw)) {
            $this->info = \Ease\Functions::reindexArrayBy($infoRaw, 'dbNazev');
        }
    }

    /**
     * Is Configured company connected ?
     * 
     * @return boolean
     */
    public function connected() {
        return array_key_exists($this->getCompany(), $this->info);
    }

    /**
     * Draw result
     */
    public function draw() {
        if ($this->connected()) {
            $myCompany = $this->getCompany();
            $return = new \Ease\TWB\LinkButton($this->url . '/c/' . $myCompany,
                    (new \AbraFlexi\ui\CompanyLogo(['height' => '24'], [$myCompany]))->getRendered() . ' ' . $this->info[$myCompany]['nazev'], 'success');
        } else {
            $return = new \Ease\TWB\LinkButton($this->getApiURL(),
                    (new \AbraFlexi\ui\AbraFlexiLogo())->getRendered() . ' ' . _('Connection Problem'), 'danger');
        }

        $return->draw();
    }

}
