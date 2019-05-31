<?php

namespace App\Entity\Gcdb;

/**
 * CadUsersSite
 */
class CadUsersSite
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $cadUser;

    /**
     * @var string|null
     */
    private $site;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cadUser.
     *
     * @param int|null $cadUser
     *
     * @return CadUsersSite
     */
    public function setCadUser($cadUser = null)
    {
        $this->cadUser = $cadUser;

        return $this;
    }

    /**
     * Get cadUser.
     *
     * @return int|null
     */
    public function getCadUser()
    {
        return $this->cadUser;
    }

    /**
     * Set site.
     *
     * @param string|null $site
     *
     * @return CadUsersSite
     */
    public function setSite($site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site.
     *
     * @return string|null
     */
    public function getSite()
    {
        return $this->site;
    }
}
