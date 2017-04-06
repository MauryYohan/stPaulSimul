<?php
/**
 * Created by PhpStorm.
 * User: ANNICK
 * Date: 11/03/2016
 * Time: 09:32
 */

namespace stpaul\IHM;

class Simul {
    private $famNom;
    private $famNbEnfant;
    private $famQF;

    private $sejNo;
    private $sejMBI;

    private $simulNbEnfPartant;
    private $simulReducQF;
    private $simulReducFamilleNombreuse;
    private $simulReducDepartMultiple;
    private $simulSousTotal;
    private $simulTotalApresReduc;
    private $simulTotalApresPlafond;
    private $simulTotalDepartMultiple;

    function __construct($p_famNom,
                         $p_famNbEnfant,
                         $p_famQF,
                         $p_sejNo,
                         $p_sejMBI,
                         $p_simulNbEnfPartant,
                         $p_simulReducQF,
                         $p_simulReducFamilleNombreuse,
                         $p_simulReducDepartMultiple,
                         $p_simulSousTotal,
                         $p_simulTotalApresReduc,
                         $p_simulTotalApresPlafond,
                         $p_simulTotalDepartMultiple)
    {
        $this->famNom = $p_famNom;
        $this->famNbEnfant = $p_famNbEnfant;
        $this->famQF = $p_famQF;
        $this->sejNo = $p_sejNo;
        $this->sejMBI = $p_sejMBI;
        $this->simulNbEnfPartant = $p_simulNbEnfPartant;
        $this->simulReducQF = $p_simulReducQF;
        $this->simulReducFamilleNombreuse = $p_simulReducFamilleNombreuse;
        $this->simulReducDepartMultiple = $p_simulReducDepartMultiple;
        $this->simulSousTotal = $p_simulSousTotal;
        $this->simulTotalApresReduc = $p_simulTotalApresReduc;
        $this->simulTotalApresPlafond = $p_simulTotalApresPlafond;
        $this->simulTotalDepartMultiple = $p_simulTotalDepartMultiple;
    }

     /**
     * @return mixed
     */
    public function getSimulNbEnfPartant()
    {
        return $this->simulNbEnfPartant;
    }

    /**
     * @param mixed $simulNbEnfPartant
     */
    public function setSimulNbEnfPartant($simulNbEnfPartant)
    {
        $this->simulNbEnfPartant = $simulNbEnfPartant;
    }

    /**
     * @return mixed
     */
    public function getSimulReducQF()
    {
        return $this->simulReducQF;
    }

    /**
     * @param mixed $simulReducQF
     */
    public function setSimulReducQF($simulReducQF)
    {
        $this->simulReducQF = $simulReducQF;
    }

    /**
     * @return mixed
     */
    public function getSimulReducFamilleNombreuse()
    {
        return $this->simulReducFamilleNombreuse;
    }

    /**
     * @param mixed $simulReducFamilleNombreuse
     */
    public function setSimulReducFamilleNombreuse($simulReducFamilleNombreuse)
    {
        $this->simulReducFamilleNombreuse = $simulReducFamilleNombreuse;
    }

    /**
     * @return mixed
     */
    public function getSimulReducDepartMultiple()
    {
        return $this->simulReducDepartMultiple;
    }

    /**
     * @param mixed $simulReducDepartMultiple
     */
    public function setSimulReducDepartMultiple($simulReducDepartMultiple)
    {
        $this->simulReducDepartMultiple = $simulReducDepartMultiple;
    }

    /**
     * @return mixed
     */
    public function getSimulSousTotal()
    {
        return $this->simulSousTotal;
    }

    /**
     * @param mixed $simulSousTotal
     */
    public function setSimulSousTotal($simulSousTotal)
    {
        $this->simulSousTotal = $simulSousTotal;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalApresReduc()
    {
        return $this->simulTotalApresReduc;
    }

    /**
     * @param mixed $simulTotalApresReduc
     */
    public function setSimulTotalApresReduc($simulTotalApresReduc)
    {
        $this->simulTotalApresReduc = $simulTotalApresReduc;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalApresPlafond()
    {
        return $this->simulTotalApresPlafond;
    }

    /**
     * @param mixed $simulTotalApresPlafond
     */
    public function setSimulTotalApresPlafond($simulTotalApresPlafond)
    {
        $this->simulTotalApresPlafond = $simulTotalApresPlafond;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalDepartMultiple()
    {
        return $this->simulTotalDepartMultiple;
    }

    /**
     * @param mixed $simulTotalDepartMultiple
     */
    public function setSimulTotalDepartMultiple($simulTotalDepartMultiple)
    {
        $this->simulTotalDepartMultiple = $simulTotalDepartMultiple;
    }

    /**
     * @return mixed
     */
    public function getFamNom()
    {
        return $this->famNom;
    }

    /**
     * @param mixed $famNom
     */
    public function setFamNom($famNom)
    {
        $this->famNom = $famNom;
    }

    /**
     * @return mixed
     */
    public function getFamNbEnfant()
    {
        return $this->famNbEnfant;
    }

    /**
     * @param mixed $famNbEnfant
     */
    public function setFamNbEnfant($famNbEnfant)
    {
        $this->famNbEnfant = $famNbEnfant;
    }

    /**
     * @return mixed
     */
    public function getFamQF()
    {
        return $this->famQF;
    }

    /**
     * @param mixed $famQF
     */
    public function setFamQF($famQF)
    {
        $this->famQF = $famQF;
    }

    /**
     * @return mixed
     */
    public function getSejNo()
    {
        return $this->sejNo;
    }

    /**
     * @param mixed $sejNom
     */
    public function setSejNo($sejNo)
    {
        $this->sejNo = $sejNo;
    }

    /**
     * @return mixed
     */
    public function getSejMBI()
    {
        return $this->sejMBI;
    }

    /**
     * @param mixed $sejMBI
     */
    public function setSejMBI($sejMBI)
    {
        $this->sejMBI = $sejMBI;
    }

    public function calcul()
    {
        $this->simulReducQF = 0;
        $this->simulReducFamilleNombreuse = 0;
        $this->simulReducDepartMultiple = 0;
        $this->simulSousTotal  = 0;
        $this->simulTotalApresReduc  = 0;
        $this->simulTotalApresPlafond  = 0;
        $this->simulTotalDepartMultiple = 0;

        if ($this->getFamQF() < 500) {
            setSimulReducQF($this->getFamQF / 10);
            $this->getFamQF() - $this->getSimulReducQF();
        }

        if ($this->getSimulNbenfPartant() == 2) {
            setSimulDepartMultiple($this->getFamQF / 20);
            $this->getFamQF() - $this->getSimulDepartMultiple();
        }

        if ($this->getSimulNbEnfPartant() >= 3) {
            setSimulDepartMultiple($this->getFamQF / 40);
            $this->getFamQF() - $this->getSimulDepartMultiple();
        }
    }

}

