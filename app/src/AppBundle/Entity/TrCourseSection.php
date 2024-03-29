<?php

/*
 * This file is part of the NeosUniversity Software.
 *
 * (c) Neossoftware Corporation
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TrCourseSection
 *
 * @ORM\Table(name="tr_course_section")
 * @ORM\Entity
 */
class TrCourseSection
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="course_id", type="integer", nullable=false)
     */
    private $courseId;

    /**
     *
     * @ORM\OneToMany(targetEntity="TrClass", mappedBy="section")
     */
    protected $classes;

    /**
     * @var integer
     *
     * @ORM\Column(name="sectionNumber", type="integer", nullable=false)
     */
    private $sectionnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberClasses", type="integer", nullable=false)
     */
    private $numberclasses;
    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * get classes
     * 
     * @return ArrayCollection
     */
    public function getClasses()
    {
        return $this->classes;
    }

     /**
      *  set classes an array collection
      */
    public function setClasses(ArrayCollection $classes)
    {
        $this->classes = $classes;
    }

    /**
     * Set courseId
     *
     * @param integer $courseId
     * @return TrCourseSection
     */
    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return integer 
     */
    public function getCourseId()
    {
        return $this->courseId;
    }

    /**
     * Set sectionnumber
     *
     * @param integer $sectionnumber
     * @return TrCourseSection
     */
    public function setSectionnumber($sectionnumber)
    {
        $this->sectionnumber = $sectionnumber;

        return $this;
    }

    /**
     * Get sectionnumber
     *
     * @return integer 
     */
    public function getSectionnumber()
    {
        return $this->sectionnumber;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TrCourseSection
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set numberclasses
     *
     * @param integer $numberclasses
     * @return TrCourseSection
     */
    public function setNumberclasses($numberclasses)
    {
        $this->numberclasses = $numberclasses;

        return $this;
    }

    /**
     * Get numberclasses
     *
     * @return integer 
     */
    public function getNumberclasses()
    {
        return $this->numberclasses;
    }
}