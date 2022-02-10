<?php

namespace ContainerFOuZ7Ez;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder24eeb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8218 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2140a = [
        
    ];

    public function getConnection()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getConnection', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getMetadataFactory', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getExpressionBuilder', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'beginTransaction', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getCache', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'transactional', array('func' => $func), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'commit', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->commit();
    }

    public function rollback()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'rollback', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getClassMetadata', array('className' => $className), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'createQuery', array('dql' => $dql), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'createNamedQuery', array('name' => $name), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'createQueryBuilder', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'flush', array('entity' => $entity), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'clear', array('entityName' => $entityName), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->clear($entityName);
    }

    public function close()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'close', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->close();
    }

    public function persist($entity)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'persist', array('entity' => $entity), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'remove', array('entity' => $entity), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'refresh', array('entity' => $entity), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'detach', array('entity' => $entity), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'merge', array('entity' => $entity), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'contains', array('entity' => $entity), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getEventManager', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getConfiguration', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'isOpen', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getUnitOfWork', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getProxyFactory', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'initializeObject', array('obj' => $obj), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'getFilters', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'isFiltersStateClean', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'hasFilters', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return $this->valueHolder24eeb->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera8218 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder24eeb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder24eeb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder24eeb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, '__get', ['name' => $name], $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        if (isset(self::$publicProperties2140a[$name])) {
            return $this->valueHolder24eeb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24eeb;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24eeb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24eeb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24eeb;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, '__isset', array('name' => $name), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24eeb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder24eeb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, '__unset', array('name' => $name), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24eeb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder24eeb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, '__clone', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        $this->valueHolder24eeb = clone $this->valueHolder24eeb;
    }

    public function __sleep()
    {
        $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, '__sleep', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;

        return array('valueHolder24eeb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8218 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8218;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8218 && ($this->initializera8218->__invoke($valueHolder24eeb, $this, 'initializeProxy', array(), $this->initializera8218) || 1) && $this->valueHolder24eeb = $valueHolder24eeb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder24eeb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder24eeb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
