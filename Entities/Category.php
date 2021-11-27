<?php

namespace Entities;

class Category
{
    private int $id;
    private string $parent;
    private string $child;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getParent(): string
    {
        return $this->parent;
    }

    /**
     * @param string $parent
     */
    public function setParent(string $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @return string
     */
    public function getChild(): string
    {
        return $this->child;
    }

    /**
     * @param string $child
     */
    public function setChild(string $child): void
    {
        $this->child = $child;
    }




}