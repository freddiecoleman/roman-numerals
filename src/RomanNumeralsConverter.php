<?php

/**
 * Class RomanNumeralsConverter
 */
class RomanNumeralsConverter {

    /**
     * @var array
     */
    protected static $lookup = [
        1000 => 'M',
        900  => 'CM',
        500  => 'D',
        400  => 'CD',
        100  => 'C',
        90   => 'XC',
        50   => 'L',
        40   => 'XL',
        10   => 'X',
        9    => 'IX',
        5    => 'V',
        4    => 'IV',
        1    => 'I'
    ];

    /**
     * @param $num
     * @return string
     */
    public function convert($num)
    {
        $resp = '';

        foreach (static::$lookup as $limit => $glyph)
        {
            if (floor($num / $limit) > 0)
            {
                $count = floor($num / $limit);
                $resp .= str_repeat($glyph, $count);
                $num -= $limit * $count;
            }
        }

        return $resp;
    }

}
