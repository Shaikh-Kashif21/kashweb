<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */
namespace Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Tag;

use Google\Web_Stories_Dependencies\AmpProject\Format;
use Google\Web_Stories_Dependencies\AmpProject\Html\Tag as Element;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Identifiable;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\SpecRule;
use Google\Web_Stories_Dependencies\AmpProject\Validator\Spec\Tag;
/**
 * Tag class Nextid.
 *
 * @package ampproject/amp-toolbox.
 *
 * @property-read string $tagName
 * @property-read array<string> $htmlFormat
 */
final class Nextid extends Tag implements Identifiable
{
    /**
     * ID of the tag.
     *
     * @var string
     */
    const ID = 'NEXTID';
    /**
     * Array of spec rules.
     *
     * @var array
     */
    const SPEC = [SpecRule::TAG_NAME => Element::NEXTID, SpecRule::HTML_FORMAT => [Format::AMP]];
}
