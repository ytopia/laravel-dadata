<?php


namespace Ytopia\Dadata\Response;

/**
 * Агрегированная статистика
 *
 * @package Ytopia\Dadata\Response
 */
class StatisticServices
{

    /**
     * Поиск дублей
     *
     * @var int
     */
    public $merging = 0;

    /**
     * Подсказки
     *
     * @var int
     */
    public $suggestions = 0;

    /**
     * Стандартизация
     *
     * @var int
     */
    public $clean = 0;
}