<?php
/**
 * File containing the Content Search handler class
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Persistence\Solr\Content\Search\CriterionVisitor\Field;

use eZ\Publish\Core\Persistence\Solr\Content\Search\CriterionVisitor,
    eZ\Publish\Core\Persistence\Solr\Content\Search\CriterionVisitor\Field,
    eZ\Publish\API\Repository\Values\Content\Query\Criterion,
    eZ\Publish\API\Repository\Values\Content\Query\Criterion\Operator,
    eZ\Publish\SPI\Persistence\Content\Type\Handler as ContentTypeHandler,
    eZ\Publish\Core\Persistence\Solr\Content\Search\FieldNameGenerator,
    eZ\Publish\Core\Persistence\Solr\Content\Search\FieldRegistry;

/**
 * Visits the Field criterion
 */
class FieldIn extends Field
{
    /**
     * CHeck if visitor is applicable to current criterion
     *
     * @param Criterion $criterion
     * @return bool
     */
    public function canVisit( Criterion $criterion )
    {
        return
            $criterion instanceof Criterion\Field &&
            ( ( $criterion->operator ?: Operator::IN ) === Operator::IN ||
              $criterion->operator === Operator::EQ );
    }

    /**
     * Map field value to a proper Solr representation
     *
     * @param DocumentField $field
     * @return void
     */
    public function visit( Criterion $criterion, CriterionVisitor $subVisitor = null )
    {
        $fieldTypes = $this->getFieldTypes();
        $criterion->value = (array) $criterion->value;

        if ( !isset( $fieldTypes[$criterion->target] ) )
        {
            return '""';
        }

        $queries = array();
        foreach ( $criterion->value as $value )
        {
            foreach ( $fieldTypes[$criterion->target] as $name )
            {
                $queries[] = $name . ':"' . $value . '"';
            }
        }

        return '(' . implode( ' OR ', $queries ) . ')';
    }
}
