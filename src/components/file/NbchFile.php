<?php

namespace mfteam\nbch\components\file;

use yii\base\Model;

/**
 * Файл использующийся в модуле НБКИ
 *
 * @property string $entity
 * @property null|string $content
 * @property string $type
 * @property string $entityId
 * @property string $fileName
 * @property string $url
 * @property string $hash
 * @property mixed $id
 * @property string|mixed $storagePath
 */
class NbchFile extends Model implements NbchFileInterface
{
    /**
     * @var string|null
     */
    protected $_storagePath;
    
    /**
     * @var string|null
     */
    protected $_content;
    
    /**
     * @var string
     */
    protected $_fileName;
    
    /**
     * @var string
     */
    protected $_entity;
    
    /**
     * @var string
     */
    protected $_entityId;
    
    /**
     * @var string
     */
    protected $_type;
    
    /**
     * @var string
     */
    protected $_url;
    
    /**
     * @var string
     */
    protected $_hash;
    
    /**
     * @var mixed
     */
    protected $_id;
    
    /**
     * @return mixed
     */
    public function getStoragePath(): ?string
    {
        return $this->_storagePath;
    }
    
    /**
     * @param string $storagePath
     * @return NbchFile
     */
    public function setStoragePath(string $storagePath): NbchFile
    {
        $this->_storagePath = $storagePath;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->_content;
    }
    
    /**
     * @param string $content
     * @return NbchFile
     */
    public function setContent(string $content): NbchFile
    {
        $this->_content = $content;
        return $this;
    }
    
    /**
     * @param string $fileName
     * @return NbchFile
     */
    public function setFileName(string $fileName): NbchFile
    {
        $this->_fileName = $fileName;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->_fileName;
    }
    
    /**
     * @param string $entity
     * @return NbchFile
     */
    public function setEntity(string $entity): NbchFile
    {
        $this->_entity = $entity;
        return $this;
    }
    
    /**
     * @param string $entityId
     * @return NbchFile
     */
    public function setEntityId(string $entityId): NbchFile
    {
        $this->_entityId = $entityId;
        return $this;
    }
    
    /**
     * @param string $type
     * @return NbchFile
     */
    public function setType(string $type): NbchFile
    {
        $this->_type = $type;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getEntity(): string
    {
        return $this->_entity;
    }
    
    /**
     * @return string
     */
    public function getEntityId(): string
    {
        return $this->_entityId;
    }
    
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->_type;
    }
    
    /**
     * @param string $url
     * @return NbchFile
     */
    public function setUrl(string $url): NbchFile
    {
        $this->_url = $url;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->_url;
    }
    
    /**
     * @param string $hash
     * @return NbchFile
     */
    public function setHash(string $hash): NbchFile
    {
        $this->_hash = $hash;
        return $this;
    }
    
    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->_hash;
    }
    
    /**
     * @param mixed $id
     * @return NbchFile
     */
    public function setId($id): NbchFile
    {
        $this->_id = $id;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }
}