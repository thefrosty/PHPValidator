<?php

declare(strict_types=1);

namespace BlakvGhost\PHPValidator\Rules;

use BlakvGhost\PHPValidator\Contracts\Rule;

/**
 * Class BaseRule
 * @package BlakvGhost\PHPValidator\Rules
 */
abstract class AbstractRule implements Rule
{

    /**
     * Name of the field being validated.
     *
     * @var string
     */
    protected string $field;

    /**
     * Constructor of the RuleInterface.
     *
     * @param array $parameters Parameters for the rule, if any.
     */
    public function __construct(protected array $parameters = [])
    {
    }
}
