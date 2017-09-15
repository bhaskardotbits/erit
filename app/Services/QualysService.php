<?php
namespace App\Services;

use App\Adapters\Qualys;

class QualysService
{
    /**
     * Qualys
     *
     * @var Qualys
     */
    private $qualys;

    /**
     * QualysService constructor.
     *
     * @param Qualys $qualys
     */
    public function __construct(Qualys $qualys)
    {
        $this->qualys   = $qualys;
    }

    /**
     * Launch domain scan
     *
     * @param $params
     *
     * @return array
     */
    public function launchDomainScan($params)
    {
        $params['save_report'] = 'yes';
        return $this->qualys->get('msp/map-2.php', $params, 'v1');
    }
}