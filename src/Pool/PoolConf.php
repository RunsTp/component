<?php
/**
 * Created by PhpStorm.
 * User: yf
 * Date: 2018/12/4
 * Time: 12:05 PM
 */

namespace EasySwoole\Component\Pool;


class PoolConf
{
    protected $class;
    protected $intervalCheckTime = 30*1000;
    protected $maxIdleTime = 15;
    protected $maxObjectNum = 20;
    protected $minObjectNum = 5;
    protected $getObjectTimeout = 0.5;

    protected $extraConf = [];

    function __construct(string $class)
    {
        $this->class = $class;
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }


    /**
     * @return float|int
     */
    public function getIntervalCheckTime()
    {
        return $this->intervalCheckTime;
    }

    /**
     * @param float|int $intervalCheckTime
     */
    public function setIntervalCheckTime($intervalCheckTime): void
    {
        $this->intervalCheckTime = $intervalCheckTime;
    }

    /**
     * @return int
     */
    public function getMaxIdleTime(): int
    {
        return $this->maxIdleTime;
    }

    /**
     * @param int $maxIdleTime
     */
    public function setMaxIdleTime(int $maxIdleTime): PoolConf
    {
        $this->maxIdleTime = $maxIdleTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxObjectNum(): int
    {
        return $this->maxObjectNum;
    }

    /**
     * @param int $maxObjectNum
     */
    public function setMaxObjectNum(int $maxObjectNum): PoolConf
    {
        $this->maxObjectNum = $maxObjectNum;
        return $this;
    }

    /**
     * @return float
     */
    public function getGetObjectTimeout(): float
    {
        return $this->getObjectTimeout;
    }

    /**
     * @param float $getObjectTimeout
     */
    public function setGetObjectTimeout(float $getObjectTimeout): PoolConf
    {
        $this->getObjectTimeout = $getObjectTimeout;
        return $this;
    }

    /**
     * @return array
     */
    public function getExtraConf(): array
    {
        return $this->extraConf;
    }

    /**
     * @param array $extraConf
     */
    public function setExtraConf(array $extraConf): PoolConf
    {
        $this->extraConf = $extraConf;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinObjectNum(): int
    {
        return $this->minObjectNum;
    }

    /**
     * @param int $minObjectNum
     */
    public function setMinObjectNum(int $minObjectNum): PoolConf
    {
        $this->minObjectNum = $minObjectNum;
        return $this;
    }

}
