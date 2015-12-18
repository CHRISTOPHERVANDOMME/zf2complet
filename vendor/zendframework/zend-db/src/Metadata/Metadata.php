<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Db\Metadata;

use Zend\Db\Adapter\Adapter;

<<<<<<< HEAD
/**
 * @deprecated Use Zend\Db\Metadata\Source\Factory::createSourceFromAdapter($adapter)
 */
class Metadata implements MetadataInterface
{
    /**
=======
class Metadata implements MetadataInterface
{
    /**
     * Adapter
     *
     * @var Adapter
     */
    protected $adapter = null;

    /**
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     * @var MetadataInterface
     */
    protected $source = null;

    /**
     * Constructor
     *
     * @param Adapter $adapter
     */
    public function __construct(Adapter $adapter)
    {
<<<<<<< HEAD
        $this->source = Source\Factory::createSourceFromAdapter($adapter);
    }

    /**
     * {@inheritdoc}
=======
        $this->adapter = $adapter;
        $this->source = $this->createSourceFromAdapter($adapter);
    }

    /**
     * Create source from adapter
     *
     * @param  Adapter $adapter
     * @return Source\AbstractSource
     */
    protected function createSourceFromAdapter(Adapter $adapter)
    {
        switch ($adapter->getPlatform()->getName()) {
            case 'MySQL':
                return new Source\MysqlMetadata($adapter);
            case 'SQLServer':
                return new Source\SqlServerMetadata($adapter);
            case 'SQLite':
                return new Source\SqliteMetadata($adapter);
            case 'PostgreSQL':
                return new Source\PostgresqlMetadata($adapter);
            case 'Oracle':
                return new Source\OracleMetadata($adapter);
        }

        throw new \Exception('cannot create source from adapter');
    }

    // @todo methods

    /**
     * Get base tables and views
     *
     * @param string $schema
     * @param bool   $includeViews
     * @return Object\TableObject[]
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getTables($schema = null, $includeViews = false)
    {
        return $this->source->getTables($schema, $includeViews);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get base tables and views
     *
     * @param string $schema
     * @return Object\TableObject[]
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getViews($schema = null)
    {
        return $this->source->getViews($schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get triggers
     *
     * @param  string $schema
     * @return array
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getTriggers($schema = null)
    {
        return $this->source->getTriggers($schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get constraints
     *
     * @param  string $table
     * @param  string $schema
     * @return array
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getConstraints($table, $schema = null)
    {
        return $this->source->getConstraints($table, $schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get columns
     *
     * @param  string $table
     * @param  string $schema
     * @return array
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getColumns($table, $schema = null)
    {
        return $this->source->getColumns($table, $schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get constraint keys
     *
     * @param  string $constraint
     * @param  string $table
     * @param  string $schema
     * @return array
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getConstraintKeys($constraint, $table, $schema = null)
    {
        return $this->source->getConstraintKeys($constraint, $table, $schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get constraints
     *
     * @param  string $constraintName
     * @param  string $table
     * @param  string $schema
     * @return Object\ConstraintObject
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getConstraint($constraintName, $table, $schema = null)
    {
        return $this->source->getConstraint($constraintName, $table, $schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get schemas
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getSchemas()
    {
        return $this->source->getSchemas();
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get table names
     *
     * @param  string $schema
     * @param  bool   $includeViews
     * @return array
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getTableNames($schema = null, $includeViews = false)
    {
        return $this->source->getTableNames($schema, $includeViews);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get table
     *
     * @param  string $tableName
     * @param  string $schema
     * @return Object\TableObject
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getTable($tableName, $schema = null)
    {
        return $this->source->getTable($tableName, $schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get views names
     *
     * @param string $schema
     * @return \Zend\Db\Metadata\Object\TableObject
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getViewNames($schema = null)
    {
        return $this->source->getViewNames($schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get view
     *
     * @param string $viewName
     * @param string $schema
     * @return \Zend\Db\Metadata\Object\TableObject
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getView($viewName, $schema = null)
    {
        return $this->source->getView($viewName, $schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get trigger names
     *
     * @param string $schema
     * @return array
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getTriggerNames($schema = null)
    {
        return $this->source->getTriggerNames($schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get trigger
     *
     * @param string $triggerName
     * @param string $schema
     * @return \Zend\Db\Metadata\Object\TriggerObject
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getTrigger($triggerName, $schema = null)
    {
        return $this->source->getTrigger($triggerName, $schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get column names
     *
     * @param string $table
     * @param string $schema
     * @return array
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getColumnNames($table, $schema = null)
    {
        return $this->source->getColumnNames($table, $schema);
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
=======
     * Get column
     *
     * @param string $columnName
     * @param string $table
     * @param string $schema
     * @return \Zend\Db\Metadata\Object\ColumnObject
>>>>>>> 2984a17cc10db6830de7319410f03caa118e446f
     */
    public function getColumn($columnName, $table, $schema = null)
    {
        return $this->source->getColumn($columnName, $table, $schema);
    }
}
