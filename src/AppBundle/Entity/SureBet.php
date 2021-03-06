<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 27.03.17
 * Time: 17:54
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="sure_bet")
 * @ORM\Entity
 */
class SureBet
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="home_name", type="string", length=256)
     */
    private $homeName;

    /**
     * @ORM\Column(name="away_name", type="string", length=256)
     */
    private $awayName;

    /**
     * @ORM\Column(name="event_name", type="string", length=256)
     */
    private $eventName;

    /**
     * @ORM\Column(name="event_id", type="string", length=256)
     */
    private $eventId;

    /**
     * @ORM\Column(name="bet_id", type="string", length=256)
     */
    private $betId;

    /**
     * @ORM\Column(name="event_time", type="datetime")
     */
    private $eventTime;

    /**
     * @ORM\Column(name="profit_percent", type="float")
     */
    private $profitPercent;

    /**
     * @ORM\Column(name="bookmakerFirst", type="integer", nullable=true)
     */
    private $bookmakerFirst;

    /**
     * @ORM\Column(name="bookmakerSecond", type="integer", nullable=true)
     */
    private $bookmakerSecond;

    /**
     * @ORM\Column(name="bookmakerThird", type="integer", nullable=true)
     */
    private $bookmakerThird;

    /**
     * @ORM\Column(name="tournament_name", type="string", length=256)
     */
    private $tournamentName;

    /**
     * @ORM\Column(name="sport_name", type="string", length=256)
     */
    private $sportName;


    /**
     * @ORM\Column(name="first_odd", type="float", nullable=true)
     */
    private $firstOddCf;

    /**
     * @ORM\Column(name="second_odd", type="float", nullable=true)
     */
    private $secondOddCf;

    /**
     * @ORM\Column(name="third_odd", type="float", nullable=true)
     */
    private $thirdOddCf;

    /**
     * @ORM\Column(name="first_odd_type", type="string", length=256, nullable=true)
     */
    private $firstOddType;

    /**
     * @ORM\Column(name="second_odd_type", type="string", length=256, nullable=true)
     */
    private $secondOddType;

    /**
     * @ORM\Column(name="third_odd_type", type="string", length=256, nullable=true)
     */
    private $thirdOddType;

    /**
     * @ORM\Column(name="bet_type", type="string", length=256)
     */
    private $betType;

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
     * Set homeName
     *
     * @param string $homeName
     *
     * @return SureBet
     */
    public function setHomeName($homeName)
    {
        $this->homeName = $homeName;

        return $this;
    }

    /**
     * Get homeName
     *
     * @return string
     */
    public function getHomeName()
    {
        return $this->homeName;
    }

    /**
     * Set awayName
     *
     * @param string $awayName
     *
     * @return SureBet
     */
    public function setAwayName($awayName)
    {
        $this->awayName = $awayName;

        return $this;
    }

    /**
     * Get awayName
     *
     * @return string
     */
    public function getAwayName()
    {
        return $this->awayName;
    }

    /**
     * Set eventTime
     *
     * @param \DateTime $eventTime
     *
     * @return SureBet
     */
    public function setEventTime($eventTime)
    {
        $this->eventTime = $eventTime;

        return $this;
    }

    /**
     * Get eventTime
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->eventTime;
    }

    /**
     * Set profitPercent
     *
     * @param float $profitPercent
     *
     * @return SureBet
     */
    public function setProfitPercent($profitPercent)
    {
        $this->profitPercent = $profitPercent;

        return $this;
    }

    /**
     * Get profitPercent
     *
     * @return float
     */
    public function getProfitPercent()
    {
        return $this->profitPercent;
    }

    /**
     * Set bookmakerFirst
     *
     * @param integer $bookmakerFirst
     *
     * @return SureBet
     */
    public function setBookmakerFirst($bookmakerFirst)
    {
        $this->bookmakerFirst = $bookmakerFirst;

        return $this;
    }

    /**
     * Get bookmakerFirst
     *
     * @return integer
     */
    public function getBookmakerFirst()
    {
        return $this->bookmakerFirst;
    }

    /**
     * Set bookmakerSecond
     *
     * @param integer $bookmakerSecond
     *
     * @return SureBet
     */
    public function setBookmakerSecond($bookmakerSecond)
    {
        $this->bookmakerSecond = $bookmakerSecond;

        return $this;
    }

    /**
     * Get bookmakerSecond
     *
     * @return integer
     */
    public function getBookmakerSecond()
    {
        return $this->bookmakerSecond;
    }

    /**
     * Set bookmakerThird
     *
     * @param integer $bookmakerThird
     *
     * @return SureBet
     */
    public function setBookmakerThird($bookmakerThird)
    {
        $this->bookmakerThird = $bookmakerThird;

        return $this;
    }

    /**
     * Get bookmakerThird
     *
     * @return integer
     */
    public function getBookmakerThird()
    {
        return $this->bookmakerThird;
    }

    /**
     * Set tournamentName
     *
     * @param string $tournamentName
     *
     * @return SureBet
     */
    public function setTournamentName($tournamentName)
    {
        $this->tournamentName = $tournamentName;

        return $this;
    }

    /**
     * Get tournamentName
     *
     * @return string
     */
    public function getTournamentName()
    {
        return $this->tournamentName;
    }

    /**
     * Set sportName
     *
     * @param string $sportName
     *
     * @return SureBet
     */
    public function setSportName($sportName)
    {
        $this->sportName = $sportName;

        return $this;
    }

    /**
     * Get sportName
     *
     * @return string
     */
    public function getSportName()
    {
        return $this->sportName;
    }

    /**
     * Set firstOddCf
     *
     * @param float $firstOddCf
     *
     * @return SureBet
     */
    public function setFirstOddCf($firstOddCf)
    {
        $this->firstOddCf = $firstOddCf;

        return $this;
    }

    /**
     * Get firstOddCf
     *
     * @return float
     */
    public function getFirstOddCf()
    {
        return $this->firstOddCf;
    }

    /**
     * Set secondOddCf
     *
     * @param float $secondOddCf
     *
     * @return SureBet
     */
    public function setSecondOddCf($secondOddCf)
    {
        $this->secondOddCf = $secondOddCf;

        return $this;
    }

    /**
     * Get secondOddCf
     *
     * @return float
     */
    public function getSecondOddCf()
    {
        return $this->secondOddCf;
    }

    /**
     * Set thirdOddCf
     *
     * @param float $thirdOddCf
     *
     * @return SureBet
     */
    public function setThirdOddCf($thirdOddCf)
    {
        $this->thirdOddCf = $thirdOddCf;

        return $this;
    }

    /**
     * Get thirdOddCf
     *
     * @return float
     */
    public function getThirdOddCf()
    {
        return $this->thirdOddCf;
    }

    /**
     * Set firstOddType
     *
     * @param string $firstOddType
     *
     * @return SureBet
     */
    public function setFirstOddType($firstOddType)
    {
        $this->firstOddType = $firstOddType;

        return $this;
    }

    /**
     * Get firstOddType
     *
     * @return string
     */
    public function getFirstOddType()
    {
        return $this->firstOddType;
    }

    /**
     * Set secondOddType
     *
     * @param string $secondOddType
     *
     * @return SureBet
     */
    public function setSecondOddType($secondOddType)
    {
        $this->secondOddType = $secondOddType;

        return $this;
    }

    /**
     * Get secondOddType
     *
     * @return string
     */
    public function getSecondOddType()
    {
        return $this->secondOddType;
    }

    /**
     * Set thirdOddType
     *
     * @param string $thirdOddType
     *
     * @return SureBet
     */
    public function setThirdOddType($thirdOddType)
    {
        $this->thirdOddType = $thirdOddType;

        return $this;
    }

    /**
     * Get thirdOddType
     *
     * @return string
     */
    public function getThirdOddType()
    {
        return $this->thirdOddType;
    }

    /**
     * Set eventName
     *
     * @param string $eventName
     *
     * @return SureBet
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventId
     *
     * @param string $eventId
     *
     * @return SureBet
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;

        return $this;
    }

    /**
     * Get eventId
     *
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set betId
     *
     * @param string $betId
     *
     * @return SureBet
     */
    

    /**
     * Set betId
     *
     * @param string $betId
     *
     * @return SureBet
     */
    public function setBetId($betId)
    {
        $this->betId = $betId;

        return $this;
    }

    /**
     * Get betId
     *
     * @return string
     */
    public function getBetId()
    {
        return $this->betId;
    }

    /**
     * Set betType
     *
     * @param string $betType
     *
     * @return SureBet
     */
    public function setBetType($betType)
    {
        $this->betType = $betType;

        return $this;
    }

    /**
     * Get betType
     *
     * @return string
     */
    public function getBetType()
    {
        return $this->betType;
    }
}
